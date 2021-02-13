<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Interest;
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
        City::factory()->count(10)->create();
        Interest::factory()->count(10)->create();
    }
}
