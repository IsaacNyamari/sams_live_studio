<?php

namespace App\Livewire;

use App\Models\Gallery;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class GalleryUpdate extends Component
{
    use WithoutUrlPagination,WithPagination;

    #[On('refreshGallery')]
    public function mount()
    {
        return $this->getGalleries();
    }

    #[On('refreshGallery')]
    public function getGalleries()
    {
        return Gallery::paginate(6);
    }

    public function render()
    {
        return view('livewire.gallery-update');
    }
}
