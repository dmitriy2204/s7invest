<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => '1',
            'name' => 'admin'
        ]);

        /**
         * 2
         */
        Role::create([
            'id' => '2',
            'name' => 'user'
        ]);
    }
}
