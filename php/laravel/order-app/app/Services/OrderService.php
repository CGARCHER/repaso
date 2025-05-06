<?php

namespace App\Services;

use App\Exceptions\OrderNotFoundException;
use App\Models\Order;
use App\Repositories\OrderRepository;
use App\Repositories\TransportRepository;
use Illuminate\Http\Response;

class OrderService{

    private $orderRepository;
    private $transportRepository;

    public function __construct(OrderRepository $orderRepository, TransportRepository $transportRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->transportRepository = $transportRepository;
    }

    public function all(){
        return $this->orderRepository->all();
    }

    public function allWithTransport(){
        return $this->orderRepository->allWithTransport();
    }

    public function allTransportWithOrder(){
        return $this->transportRepository->allWithOrder();
    }

    public function create($params){
        $order = new Order();
        //$order->name = $params['name'];
        //$order->used = $params['used'];
        $order->fill($params);
        return $this->orderRepository->create($order);
    }

    public function get($id){
        $order = $this->orderRepository->get($id);

        if(!$order){
            throw new OrderNotFoundException(Response::HTTP_NOT_FOUND, "No existe un pedido con id {$id}");
        }

        return $order;
    }
}