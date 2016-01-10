<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryProduct extends Model{
    protected $fillable = [
          'product_id',
          'user_id',
          'total',
          'quantity'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }
}
