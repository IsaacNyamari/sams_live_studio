<?php

namespace App\Livewire;

use App\Models\Brands;
use Livewire\Attributes\On;
use Livewire\Component;

class BrandsUi extends Component
{
    public function mount()
    {
        return $this->getBrands();
    }

    public function render()
    {
        return view('livewire.brands-ui');
    }

    #[On('refreshBrands')]
    public function getBrands()
    {
        return Brands::all();
    }
}
