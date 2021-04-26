<?php

namespace Database\Seeders;

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
        //For Fetching Portfolio Seeder
        $this->call(PortfolioSeeder::class);

        //For user login Seeder
        Eloquent::unguard();
        $this->call('UserSeeder');
    }
}
