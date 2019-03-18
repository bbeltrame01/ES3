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
        User::create([
            'name'  =>  'Bruno Beltrame',
            'email' =>  'bruno.beltrame7@gmail.com',
            'password'  =>  bcrypt('1234'),
        ]);
    }
}