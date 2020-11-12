<?php

namespace Database\Seeders\year2020;

use App\Models\User;
use Database\Seeders\SmartSeeder;

class SEED_2020_11_12_UsersSeeder extends SmartSeeder
{

    public function seed()
    {
        User::factory()->create([
            'name'     => 'Admin',
            'email'    => 'admin@admin.ru',
            'password' => bcrypt('123456'),
        ]);
        User::factory()->count(10)->create();
    }
}
