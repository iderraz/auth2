<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Database\Factories\PortfolioFactory;
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
        $this->call([
            AbouSeeder::class,
            LocationSeeder::class,
            ContactSeeder::class
        ]);

        Portfolio::factory(9)->create();
    }
}
