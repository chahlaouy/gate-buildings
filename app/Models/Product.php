<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'imagesUrls' => 'array'
    ];

    public function category(){

        return $this->belongsTo(Category::class, 'category_id');
    }

    public function partner(){

        return $this->belongsTo(Partner::class, 'partner_id');
    }
}
