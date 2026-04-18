<?php

namespace App\Models;

use Database\Factories\BrandsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    /** @use HasFactory<BrandsFactory> */
    use HasFactory;

    protected $fillable = ['name', 'logo_path'];
}
