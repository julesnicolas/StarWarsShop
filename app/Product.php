<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    protected $fillable = [
        'category_id',
        'title',
        'abstract',
        'content',
        'publish_date',
        'status',
        'price',
        'media_id'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag', 'product_tags');
    }

    public function media(){
        return $this->belongsTo('App\Media');
    }
}
