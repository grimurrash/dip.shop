<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id', 'id');
    }

    public function status(){
        return ($this->quantity > 0) ? "На складе" : "Нет на складе";
    }

    public function price(){
        return $this->price . " ". "₽";
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
