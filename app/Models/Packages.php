<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $fillable = ['name', 'description', 'price'];

    public function features()
    {
        return $this->hasMany(PackageFeatures::class, 'package_id');
    }
}
