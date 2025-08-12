<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 * @method static find($id)
 */
class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'img'
    ];

    protected $casts = [
        'title' => 'array',
        'desc' => 'array'
    ];
}
