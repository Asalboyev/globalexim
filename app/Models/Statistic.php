<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'number',
        'product_id',
    ];

    protected $casts = [
        'title' => 'array'
    ];


    public function product() {
        return $this->belongsTo('App\Models\Product');
    }


}
