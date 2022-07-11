<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'imagesUrls' => 'array'
    ];

    public function products(){

        return $this->hasMany(Product::class, 'category_id')->latest();
    }
}
