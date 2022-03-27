<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\UserSeeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'      => 'Fairy Blessa Eyas',
            'email'     => 'blessa.eyas@hcdc.edu.ph',
            'password'  => hash::make('password'),
            'remember_token'  => str_random(10),
        ]);
    }
}
