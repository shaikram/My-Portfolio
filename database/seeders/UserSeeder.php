<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;//for hash or encryption
use Illuminate\Support\Facades\Str;//for str_
use Illuminate\Support\Facades\Arr; //for array Fucntions
use laravel\helpers; // for helpers

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
        "userName" => "aikee masa",
        "email" => "aikeemasa@yahoo.com",
        "password" => Hash::make('showforce'),
        "remember_token" => Str::random(10, 'Webslesson')
      ]);
    }
}
