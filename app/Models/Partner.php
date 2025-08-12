<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',
        'img'
    ];
}
