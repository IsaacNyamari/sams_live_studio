<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveStream extends Model
{
    /** @use HasFactory<\Database\Factories\LiveStreamFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'stream_key',
        'stream_url',
        'stream_id',
        'status',
    ];
}
