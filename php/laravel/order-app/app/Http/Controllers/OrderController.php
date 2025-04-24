<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return response()->json([
            'status' => true,
            'message' => 'orders retrieved successfully',
            'data' => $orders
        ], 200);
    }

}
