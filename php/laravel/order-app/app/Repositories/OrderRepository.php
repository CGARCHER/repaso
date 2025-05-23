<?php

namespace App\Repositories;

use App\Models\Order;

class OrderRepository{

    public function all(){
        return Order::all();
    }

    public function allWithTransport(){
        return Order::with('transport')->get();
    }

    public function create(Order $order){
        return $order->save();
    }

    public function get($id){
        return Order::find($id);
    }
}