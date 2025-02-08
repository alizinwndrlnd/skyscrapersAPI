<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\CitiesSeeder;
use Database\Seeders\SkyscrapersSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        $this->call(CitiesSeeder::class);
        $this->call(SkyscrapersSeeder::class);

    }
}
