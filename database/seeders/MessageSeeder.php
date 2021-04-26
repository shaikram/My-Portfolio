<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;
use Faker\Generator; //use faker to generate faker
use Faker\Factory as Faker; //use faker to generate faker

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //declare to use faker
      $faker = Faker::create();

      for ($i=0; $i < 100; $i++) {
        Message::create([
          "username" => $faker->name,
          "email" => $faker->email,
          "description" => $faker->realText,
          "status" => 1
        ]);
      }
    }
}
