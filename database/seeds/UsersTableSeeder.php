<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = '123456';

        User::create([
            'fname' => 'Ivanov',
            'name' => 'Ivan',
            'sname' => 'Ivanovich',
            'email' => 'admin@test.ru',
            'password' => bcrypt($password),
            'role_id' => '1'
        ]);

        User::create([
            'fname' => 'Petrov',
            'name' => 'Petr',
            'sname' => 'Petrovich',
            'email' => 'petrovich@test.ru',
            'password' => bcrypt($password),
            'role_id' => '2'
        ]);

        User::create([
            'fname' => 'Sidorov',
            'name' => 'Sidor',
            'sname' => 'Sidorovich',
            'email' => 'sidorovich@test.ru',
            'password' => bcrypt($password),
            'role_id' => '2'
        ]);
    }
}
