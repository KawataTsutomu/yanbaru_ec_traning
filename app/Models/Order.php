<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $table = 't_orders';
    protected $dates = ['order_date'];

    public $timestamps = false;

    public function orderDetails() {
        return $this->hasMany('App\Models\OrderDetail', 'id', 'order_detail_number' );
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
