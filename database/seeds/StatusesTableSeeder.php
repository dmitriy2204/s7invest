<?php

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = ['Исправна', 'Неисправна', 'В ремонте', 'Требует проверки', 'На тренажере', 'Другое'];

        for($i=0; $i<count($statuses); $i++){
            Status::create([
                'name' => $statuses[$i]
            ]);
        }

    }
}
