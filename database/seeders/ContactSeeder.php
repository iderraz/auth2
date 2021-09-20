<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([[
            "name"=>"facebook",
            "url"=>"facebook.com"
        ],
        [
            "name"=>"linkedin",
            "url"=>"linkedin.com"
        ],
        [
            "name"=>"twitter",
            "url"=>"twitter.com"
        ],
        [
            "name"=>"twitch",
            "url"=>"twitch.com"
        ]]);
    }
}
