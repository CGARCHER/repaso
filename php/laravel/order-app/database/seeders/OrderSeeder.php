<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order1 = new Order();
        $order1->name = "Teclado";
        $order1->used = true;
        $order1->transport_id = 1;
        $order1->save();

        $order1 = new Order();
        $order1->name = "Ratón";
        $order1->used = false;
        $order1->transport_id = 2;
        $order1->save();

        $order1 = new Order();
        $order1->name = "Monitor";
        $order1->used = false;
        $order1->transport_id = 1;
        $order1->save();

    }
}
