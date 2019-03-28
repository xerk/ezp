<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model 
{

    protected $table = 'orders';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function city()
    {
        return $this->belongsTo('App\City', 'city_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

}