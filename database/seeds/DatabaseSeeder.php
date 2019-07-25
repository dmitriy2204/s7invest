<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(SimulatorsTableSeeder::class);
        $this->call(DetailsTableSeeder::class);
        $this->call(DetailSimulatorTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
