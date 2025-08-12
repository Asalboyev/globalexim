<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, int $int)
 */
class Catalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'parent'
    ];

    protected $casts = [
        'title' => 'array'
    ];

    public function products() {
        return $this->hasMany('App\Models\Product');
    }
}
