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
        // \App\Models\User::factory(10)->create();
        $this->call([
            EventSeeder::class,
            ProductionSeeder::class,
            ProfileSeeder::class,
            ProyectSeeder::class,
            UserSeeder::class,
            VideoSeeder::class,
            ImageSeeder::class,
            PdfSeeder::class,
        ]);
    }
}
