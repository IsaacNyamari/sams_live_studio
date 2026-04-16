<?php

namespace App\Livewire;

use App\Events\LoadStudioPackages;
use App\Models\Packages;
use Livewire\Component;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

class EditPackageForm extends Component
{
    use WithSweetAlert;

    public $package;

    public $title;

    public $description;

    public $price;

    public $features;

    public $featured;

    public function mount(Packages $package)
    {
        $this->package = $package;
        $this->title = $package->name;
        $this->description = $package->description;
        $this->price = $package->price;
        $this->featured = $package->featured;
        $this->features = implode(', ', $package->features->pluck('feature')->toArray());
    }

    public function render()
    {
        return view('livewire.edit-package-form');
    }

    public function updatePackage()
    {
        if ($this->featured === true) {
            $featuredPackage = Packages::whereFeatured(true)->first();
            $featuredPackage->featured = false;
            $featuredPackage->save();

            $this->package->featured = true;
            $this->package->save();
        }
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'features' => 'nullable|string',
            'featured' => 'boolean',
        ]);
        // dd($this->featured);
        $this->package->update([
            'name' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'featured' => $this->featured === true ? true : false,
        ]);

        // Update features
        $featuresArray = explode(',', trim($this->features));
        $this->package->features()->delete(); // Remove old features

        foreach ($featuresArray as $feature) {
            if (! empty(trim($feature))) {
                $this->package->features()->create([
                    'feature' => trim($feature),
                ]);
            }
        }

        $this->swalToastSuccess([
            'title' => 'Package updated successfully!',
            'position' => 'top-end',
            'timer' => 3000,
            'showConfirmButton' => false,
        ]);
        broadcast(new LoadStudioPackages('Updated'))->toOthers();
    }
}
