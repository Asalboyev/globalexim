<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, int $int)
 * @method static whereHas(string $string, \Closure $param)
 * @method static find($id)
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'catalog_id',
        'title',
        'desc',
        'main_img'
    ];

    protected $casts = [
        'title' => 'array',
        'desc' => 'array'
    ];

    // public function productImages() {
    //     return $this->hasMany('App\Models\ProductImage');
    // }

    public function catalog() {
        return $this->belongsTo('App\Models\Catalog');
    }


    public function statistic() {
        return $this->hasMany('App\Models\Statistic');
    }
}
