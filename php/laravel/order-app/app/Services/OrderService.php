<?php

namespace App\Services;

use App\Models\Order;
use App\Repositories\OrderRepository;

class OrderService{

    private $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function all(){
        return $this->orderRepository->all();
    }

    public function create($params){
        $order = new Order();
        //$order->name = $params['name'];
        //$order->used = $params['used'];
        $order->fill($params);
        return $this->orderRepository->create($order);
    }
}