<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function path(){

        return "/blog/" . $this->slug;
    }

    // public function getThumbnailAttribute(){

    //     return $this->thumbnail;
    // }



}
