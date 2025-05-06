<?php

namespace Database\Seeders;

use App\Models\Transport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transport = new Transport();
        $transport->name = "seur";
        $transport->owner = "Ramon";
        $transport->save();

        $transport = new Transport();
        $transport->name = "MRW";
        $transport->owner = "Alfonso";
        $transport->save();
    }
}
