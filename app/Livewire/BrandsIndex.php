<?php

namespace App\Livewire;

use App\Models\Brands;
use Livewire\Component;

class BrandsIndex extends Component
{
    public function mount()
    {
        return $this->getBrands();
    }

    public function render()
    {
        return view('livewire.brands-index');
    }

    public function getBrands()
    {
        return Brands::all();
    }
}
