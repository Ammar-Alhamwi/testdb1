<?php

namespace App;
use App\items;
use Illuminate\Database\Eloquent\Model;

class order_datail extends Model
{
    protected $guarded = [];
    public function item(){
        return $this->belongsTo('App\items');
    }
    public function order(){
        return $this->belongsTo('App\order');
    }
}
