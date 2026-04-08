<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageFeatures extends Model
{
    protected $fillable = ['package_id', 'feature'];

    public function package()
    {
        return $this->belongsTo(Packages::class);
    }
}
