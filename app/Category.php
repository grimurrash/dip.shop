<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(Subcategory::class);
    }

//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }
}
