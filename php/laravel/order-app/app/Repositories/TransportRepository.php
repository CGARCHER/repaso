<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\Transport;

class TransportRepository{

    public function allWithOrder(){
        return Transport::with('order')->get();
    }

}