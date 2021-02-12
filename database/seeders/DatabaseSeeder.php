<?php

namespace Database\Seeders;

use App\Models\Event_city;
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
        Event_city::factory()->count(10)->create();
    }
}
