<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\CreateOrderRequest;
use App\Services\OrderService;

class OrderController extends Controller
{
    private $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }
    public function index()
    {
        $orders = $this->orderService->all();
        return ApiResponse::success($orders,'orders retrieved successfully');
    }

    public function create(CreateOrderRequest $createOrderRequest){
        $params =  $createOrderRequest->all();
        $order = $this->orderService->create($params);
        return ApiResponse::success($order,'order created',201);
    }

}
