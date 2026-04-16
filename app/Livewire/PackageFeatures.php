<?php

namespace App\Livewire;

use App\Events\LoadStudioPackages;
use App\Models\Packages;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

class PackageFeatures extends Component
{
    use WithFileUploads,WithSweetAlert;

    public $packageFeaturesCount = 1;

    #[Validate('required|string')]
    public $title;

    #[Validate('required|string')]
    public $description;

    #[Validate('required|numeric')]
    public $price;

    #[Validate('required|string')]
    public $icon;

    #[Validate('required|string')]
    public $features;

    public function render()
    {
        return view('livewire.package-features');
    }

    public function addPackage()
    {
        $this->validate();
        $featuresArray = explode(',', trim($this->features));
        $package = Packages::create([
            'name' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'icon' => $this->icon,
        ]);

        foreach ($featuresArray as $feature) {
            if (! empty(trim($feature))) {
                $package->features()->create([
                    'feature' => trim($feature),
                ]);
            }
        }

        $this->swalToastSuccess([
            'title' => 'Package added successfully!',
            'position' => 'top-end',
            'timer' => 3000,
            'showConfirmButton' => false,

        ]);
        // Reset form fields
        $this->reset(['title', 'description', 'price', 'icon', 'features']);
        broadcast(new LoadStudioPackages('Package added'));
    }
}
