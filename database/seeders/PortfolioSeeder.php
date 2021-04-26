<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use Faker\Generator; //use faker to generate faker
use Faker\Factory as Faker; //use faker to generate faker

class PortfolioSeeder extends Seeder
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

      for ($i=0; $i < 10; $i++) {
        Portfolio::create([
          "webName" => $faker->name,
          "webURL" => $faker->url,
          "systemKind" => "Web Portfolio",
          "projectType" => "PORTFOLIO",
          "description" => $faker->realText,
          "coverPhoto" => "web10.png",
          "photo1" => "web2.png",
          "photo2" => "web11.png",
          "photo3" => "web9.JPg",
          "photo4" => "web4.jpg"
        ]);
      }




    }
}
