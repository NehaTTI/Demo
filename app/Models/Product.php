<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Product extends Authenticatable

{

    protected $table   = "product";

     protected $fillable = [
        'description',
        'price',
        'stock',
    ];

    public $timestamps = false;

    // public function category(){
    //     return $this->belongsTo(Category::class,'cat_id');
    // }
    // public function subcategory(){
    //     return $this->belongsTo(SubCategory::class,'subcat_id');
    // }

    // public function order(){
    //     return $this->hasMany(Order::class);
    // }

    // public function custprice(){
    //     return $this->belongsTo(CustPrice::class);
    // }

}

