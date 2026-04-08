<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Attributes\On;
use Livewire\Component;

class LoadFrontendServices extends Component
{
    public function render()
    {
        $services = $this->getServices();

        return view('livewire.load-frontend-services', compact('services'));
    }

    #[On('refreshServices')]
    public function getServices()
    {
        return Service::all();
    }
}
