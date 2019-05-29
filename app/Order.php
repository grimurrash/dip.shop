<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function statusClass()
    {
        if ($this->status == 'В ожидании') {
            return 'label label-default';
        } else if ($this->status == 'В процессе') {
            return 'label label-primary';
        } else if ($this->status == 'Отменен') {
            return 'label label-danger';
        } else if ($this->status == 'Выполнен') {
            return 'label label-success';
        }
    }
    public function totalPrice(){
        $total = 0;
        foreach ($this->items as $item){
            $total += $item->count * $item->product->price;
        }
        return $total . ' ₽';
    }
    public function itemCount(){
        $count = 0;
        foreach ($this->items as $item){
            $count += $item->count;
        }
        return $count. ' шт.';
    }
}
