<?php

namespace App\Livewire;

use Livewire\Component;

class SiteSettings extends Component
{
    public $appName;

    public $mailHost;

    public $mailPort;

    public $mailUsername;

    public $mailPassword;

    public $mailEncryption;

    // pusher settings
    public $pusherAppId;

    public $pusherKey;

    public $pusherSecret;

    public $pusherCluster;

    public $pusherPort;

    /*
    paystack settings
    */
    public $paystackPublicKey;

    public $paystackSecretKey;

    public $paystackMerchantUrl;

    public $studioPhone;

    public $studioPhoneAlt;

    public $studioEmail;

    public $bookingsEmail;

    public $livePeerApiKey;

    // social media links
    public $facebookUrl;

    public $tiktokUrl;

    public $instagramUrl;

    public $youtubeUrl;


    public $appLogo;
    public function mount()
    {
        $this->appName = env('APP_NAME');
        $this->mailHost = env('MAIL_HOST');
        $this->mailPort = env('MAIL_PORT');
        $this->mailUsername = env('MAIL_USERNAME');
        $this->mailPassword = env('MAIL_PASSWORD');
        $this->mailEncryption = env('MAIL_ENCRYPTION');

        $this->pusherAppId = env('PUSHER_APP_ID');
        $this->pusherKey = env('PUSHER_APP_KEY');
        $this->pusherSecret = env('PUSHER_APP_SECRET');
        $this->pusherCluster = env('PUSHER_APP_CLUSTER');
        $this->pusherPort = env('PUSHER_PORT', 443);

        $this->studioPhone = env('STUDIO_PHONE');
        $this->studioPhoneAlt = env('STUDIO_PHONE_ALT');
        $this->studioEmail = env('STUDIO_EMAIL');
        $this->bookingsEmail = env('BOOKINGS_EMAIL');

        $this->paystackPublicKey = env('PAYSTACK_PUBLIC_KEY');
        $this->paystackSecretKey = env('PAYSTACK_SECRET_KEY');
        $this->paystackMerchantUrl = env('PAYSTACK_PAYMENT_URL');

        $this->livePeerApiKey = env('LIVEPEER_API');

        // social media links
        $this->facebookUrl = env('FACEBOOK_URL');
        $this->tiktokUrl = env('TIKTOK_URL');
        $this->instagramUrl = env('INSTAGRAM_URL');
        $this->youtubeUrl = env('YOUTUBE_URL');

        $this->appLogo = env('APP_LOGO');
    }

    public function render()
    {
        return view('livewire.site-settings');
    }

    public function saveSiteSettings()
    {
        batchEnvUpdate([
            'APP_NAME' => "'{$this->appName}'",
            'STUDIO_PHONE' => "'{$this->studioPhone}'",
            'STUDIO_PHONE_ALT' => "'{$this->studioPhoneAlt}'",
            'STUDIO_EMAIL' => "'{$this->studioEmail}'",
            'BOOKINGS_EMAIL' => "'{$this->bookingsEmail}'",
            'APP_LOGO' => "'{$this->appLogo}'",
        ]);

        session()->flash('message', 'Settings updated successfully.');
    }

    public function savePusherSettings()
    {
        batchEnvUpdate([
            'PUSHER_APP_ID' => "'{$this->pusherAppId}'",
            'PUSHER_APP_KEY' => "'{$this->pusherKey}'",
            'PUSHER_APP_SECRET' => "'{$this->pusherSecret}'",
            'PUSHER_APP_CLUSTER' => "'{$this->pusherCluster}'",
            'PUSHER_PORT' => $this->pusherPort,
        ]);

        session()->flash('message', 'Pusher settings updated successfully.');
    }

    public function savePaystackSettings()
    {
        batchEnvUpdate([
            'PAYSTACK_PUBLIC_KEY' => "'{$this->paystackPublicKey}'",
            'PAYSTACK_SECRET_KEY' => "'{$this->paystackSecretKey}'",
            'PAYSTACK_PAYMENT_URL' => "'{$this->paystackMerchantUrl}'",
        ]);

        session()->flash('message', 'Paystack settings updated successfully.');
    }

    public function saveContactSettings()
    {
        batchEnvUpdate([
            'STUDIO_PHONE' => "'{$this->studioPhone}'",
            'STUDIO_PHONE_ALT' => "'{$this->studioPhoneAlt}'",
            'STUDIO_EMAIL' => "'{$this->studioEmail}'",
            'BOOKINGS_EMAIL' => "'{$this->bookingsEmail}'",
        ]);

        session()->flash('message', 'Contact settings updated successfully.');
    }

    public function saveMailSettings()
    {
        batchEnvUpdate([
            'MAIL_HOST' => "'{$this->mailHost}'",
            'MAIL_PORT' => $this->mailPort,
            'MAIL_USERNAME' => "'{$this->mailUsername}'",
            'MAIL_PASSWORD' => "'{$this->mailPassword}'",
            'MAIL_ENCRYPTION' => "'{$this->mailEncryption}'",
        ]);

        session()->flash('message', 'Mail settings updated successfully.');
    }

    public function saveLivePeerSettings()
    {
        batchEnvUpdate([
            'LIVEPEER_API' => "'{$this->livePeerApiKey}'",
        ]);

        session()->flash('message', 'LivePeer settings updated successfully.');
    }

    public function saveSocialSettings()
    {
        batchEnvUpdate([
            'FACEBOOK_URL' => "'{$this->facebookUrl}'",
            'TIKTOK_URL' => "'{$this->tiktokUrl}'",
            'INSTAGRAM_URL' => "'{$this->instagramUrl}'",
            'YOUTUBE_URL' => "'{$this->youtubeUrl}'",
        ]);

        session()->flash('message', 'Social media settings updated successfully.');
    }
}
