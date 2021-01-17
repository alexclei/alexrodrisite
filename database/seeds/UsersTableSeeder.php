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
            'name' => 'Alex Rodrigues',
            'email' => 'alexcleiton16@gmail.com',
            'password' => Hash::make('81238174'),
        ]);
    }
}
