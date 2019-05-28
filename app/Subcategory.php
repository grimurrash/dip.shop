<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $guarded = [];

    public function parent(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function products(){
       return $this->hasMany(Product::class);
    }

//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }
}
