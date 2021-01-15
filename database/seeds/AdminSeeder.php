<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'mindia',
            'email' => 'mindiaarabuli4@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => str_random(19)
        ]);
    }
}
