<?php

use Illuminate\Database\Seeder;
use App\Models\Detail;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail::create([
            'id' => '1',
            'name' => 'Светодиодный модуль (красный) 24В / Led module (red) 24V',
            'supplier_num' => '33 EARL',
            'producer_num' => '33 EARL',
            'serial' => '',
            'supplier' => '',
            'producer' => 'BACO',
            'amount' => '2',
            'min_amount' => '1',
            'location_id' => '2522/A',
            'analogues' => '',
            'status' => '1',
            'type' => '1',
            'used' => '0',
            'ordered' => '0'
        ]);

        Detail::create([
            'id' => '2',
            'name' => 'SSD PARVEX Блок управления электродвигателя (Drive)',
            'supplier_num' => 'DLD13M04R',
            'producer_num' => 'DLD13M04R',
            'serial' => '1111025',
            'supplier' => '',
            'producer' => 'Parker',
            'amount' => '1',
            'min_amount' => '1',
            'location_id' => '2414',
            'status' => '2',
            'type' => '1',
            'used' => '0',
            'ordered' => '0'
        ]);

        Detail::create([
            'id' => '3',
            'name' => 'Редуктор привода в сборке с электродвигателем (Motor/Gearbox)',
            'supplier_num' => 'GX4N100R0600',
            'producer_num' => 'SSD parvex GX4N100R0600',
            'serial' => '39450/2507084625',
            'supplier' => '',
            'producer' => 'Parker',
            'amount' => '1',
            'min_amount' => '1',
            'location_id' => '2426',
            'status' => '1',
            'type' => '2',
            'analogues' => '',
            'used' => '0',
            'ordered' => '0'
        ]);

        Detail::create([
            'id' => '4',
            'name' => 'Соленоид, коловратный 24V (Solenoid, rotary)',
            'supplier_num' => 'GDAY025X20B23',
            'producer_num' => 'GDAY025X20B23',
            'serial' => '',
            'supplier' => '',
            'producer' => 'Magnet-Schultz',
            'amount' => '1',
            'min_amount' => '1',
            'location_id' => '2414/B',
            'status' => '6',
            'type' => '2',
            'analogues' => '',
            'used' => '0',
            'ordered' => '0'
        ]);

        Detail::create([
            'id' => '5',
            'name' => 'Переключатель, индуктивный датчик 8мм резьба 30мм длинной (Switch, INDUCTIVE ',
            'supplier_num' => '52025',
            'producer_num' => 'NBN3-8GM30-E2',
            'serial' => '',
            'supplier' => '',
            'producer' => 'Pepperl+Fuchs',
            'amount' => '2',
            'min_amount' => '1',
            'location_id' => '2414',
            'status' => '5',
            'type' => '1',
            'analogues' => '',
            'used' => '0',
            'ordered' => '0'
        ]);
    }
}
