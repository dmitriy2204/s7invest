<?php

use Illuminate\Database\Seeder;
use App\Models\Simulator;

class SimulatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Simulator::create([
            'id' => '1',
            'name' => 'A320'
        ]);

        Simulator::create([
            'id' => '2',
            'name' => 'A322'
        ]);

        Simulator::create([
            'id' => '3',
            'name' => 'MFTD'
        ]);
    }
}
