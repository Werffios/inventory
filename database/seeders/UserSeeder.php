<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use  App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nicolas Suarez',
            'document' => '1010114825',
            'email' => 'nasuarezro@unal.edu.co',
            'cellphone' => '3228192983',
            'password' => bcrypt('12345678'),

        ]);
        User::factory(9)->create();
    }
}
