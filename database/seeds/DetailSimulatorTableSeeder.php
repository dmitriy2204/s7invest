<?php

use Illuminate\Database\Seeder;
use App\Models\Detail;
use App\Models\Simulator;

class DetailSimulatorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail::find(1)->simulators()->attach([1,2]);
        Detail::find(2)->simulators()->attach(3);
        Detail::find(3)->simulators()->attach(1);
        Detail::find(4)->simulators()->attach(2);
        Detail::find(5)->simulators()->attach(1);
    }
}
