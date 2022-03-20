<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    protected $guarded = [];
    public function category(){

        return $this->belongsTo('App\category');
    }
}
