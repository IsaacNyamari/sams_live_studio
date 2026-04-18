<?php

namespace App\Livewire;

use App\Mail\PackageInquiry;
use App\Models\Packages;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\On;
use Livewire\Component;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

class PackageUi extends Component
{
    use WithSweetAlert;

    public $packages;

    public $name;

    public $email;

    public $phone;

    public $message;

    public $duration;

    public function mount()
    {
        $this->packages = $this->getPackages();
    }

    public function render()
    {
        return view('livewire.package-ui');
    }

    #[On('refreshPackages')]
    public function getPackages()
    {
        return Packages::with('features')->get()->sortByDesc('price');
    }

    public function getPackage(Packages $package)
    {
        $this->message = 'Hello '.config('app.name').'! I am interested in your '.$package->name.' package with the following features: '.$package->features->pluck('feature')->join(', ').'. Please provide more details and availability.';
    }

    public function sendInquiry(Packages $package)
    {
        $name = $package['name'];
        $message = 'Hello '.config('app.name')."! I am interested in your {$name} package with the following features: {$package->features->pluck('feature')->join(', ')}. Please provide more details and availability.";
        try {
            Mail::to(config('mail.studio.address'))->queue(new PackageInquiry([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'message' => $message,
                'duration' => $this->duration,
                'package' => $name,
                'features' => $package->features->pluck('feature')->join(', '),
            ]));
            $this->dispatch('inquirySent', ['message' => "Your inquiry for the {$name} package has been sent!", 'icon' => 'success']);
        } catch (\Exception $e) {
            Log::error('Failed to send package inquiry email: '.$e->getMessage());
            $this->dispatch('inquirySent', ['message' => 'There was an error sending your inquiry. Please try again later.', 'icon' => 'error']);
        }
    }
}
