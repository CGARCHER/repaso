<?php

namespace App\Repositories;

use App\Models\Order;

class OrderRepository{

    public function all(){
        return Order::all();
    }

    public function create(Order $order){
        return $order->save();
    }

    public function get($id){
        return Order::find($id);
    }
}