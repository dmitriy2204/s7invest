<?php

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Запасные части', 'Расходные материалы'];

        for($i=0; $i<count($types); $i++){
            Type::create([
                'name' => $types[$i]
            ]);
        }
    }
}
