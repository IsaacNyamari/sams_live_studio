<?php

namespace App\Livewire;

use App\Events\NotifyAdminOnDonation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportEvents\Event;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

class DonationPageForm extends Component
{
    use WithSweetAlert;
    #[Validate('required')]
    public $amount = 1000;
    public function render()
    {
        return view('livewire.donation-page-form');
    }

    public function makeDonation()
    {
        $data =   $this->validate();
        $data['name'] = Auth::user()->name;
        $data['amount'] = $this->amount * 100;
        $data['email'] = Auth::user()->email;
        $data['key'] = env("PAYSTACK_PUBLIC_KEY");
        // add spin to swal
        $this->swalFire([
            'title' => 'Processing payment...',
            'allowOutsideClick' => false,
            'showConfirmButton' => true,
            'didOpen' => 'function() { Swal.showLoading() }',
        ]);
        $this->dispatch('initializePayment', $data);
    }
    #[On('paymentPopupClosed')]
    public function paymentFailed()
    {
        $this->swalFire([
            'title' => 'Processing payment failed!',
            'icon' => 'error',
            'allowOutsideClick' => false,
            'showConfirmButton' => true,
        ]);
    }
    #[On('paymentSuccess')]
    public function paymentSuccessful($reference)
    {
        $response = $this->verifyPaystackTransaction($reference);

        $payment = Auth::user()->payments()->create([
            'payment_type' => 1,
            'reference' => $reference,
            'transaction_code' => $response['data']['receipt_number'],
            'amount' => $response['data']['amount'] / 100,
            'bank' => $response['data']['authorization']['bank'],
            'country_code' => $response['data']['authorization']['country_code'] ?? null,
            'brand' => $response['data']['authorization']['brand'] ?? null,
            'card_type' => $response['data']['authorization']['card_type'] ?? null,
            'phone' => $response['data']['authorization']['mobile_money_number'] ?? null,
        ]);
        $this->swalFire([
            'icon' => 'success',
            'title' => 'Success',
            'text' => "Thanks " . Auth::user()->name . ". Your " . $payment->type()->first()->name . " was Successful!",
        ]);
        $admin = User::role('admin')->first();
        $this->dispatch('donationMade');
        broadcast(new NotifyAdminOnDonation([
            'admin_id' => $admin->id,
            'donor_name' => Auth::user()->name,
            'amount' => $payment->amount,
            'reference' => $payment->reference,
        ]));
    }
    public function verifyPaystackTransaction(string $reference)
    {
        $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))
            ->get("https://api.paystack.co/transaction/verify/{$reference}");

        if ($response->failed()) {
            return false;
        }

        $payload = $response->json();

        // Paystack API-level success
        if (!($payload['status'] ?? false)) {
            return false;
        }

        // Transaction-level success
        if (($payload['data']['status'] ?? '') !== 'success') {
            return false;
        }
        return $payload;
        // return $payload['data']['receipt_number'] ?? $reference; // Use receipt number or fallback to reference
    }
}
