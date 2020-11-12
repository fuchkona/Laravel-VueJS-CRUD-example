<?php

namespace Database\Seeders;

use Database\Seeders\year2020\SEED_2020_11_12_UsersSeeder;
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
        $this->call(SEED_2020_11_12_UsersSeeder::class);
    }
}
