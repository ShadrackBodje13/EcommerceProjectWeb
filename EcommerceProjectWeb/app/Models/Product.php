<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = [
        'name',
        'image_name',
        'description',
        'quantity',
        'price',
        'discount',
        'tag',
        'category_id'
    ];
/*
    public function category()
    {
    	return $this->belongsTo('App\Models\Category','category_id','id');
    }
    */
}
