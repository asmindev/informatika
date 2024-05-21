<?php

namespace Database\Seeders;

use App\Models\Alumni;
use App\Models\Facility;
use App\Models\Lecturer;
use App\Models\News;
use App\Models\Tridharma;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'password' => bcrypt('12345678'),
            'email' => 'it@mail.com',
        ]);
        Facility::factory(10)->create();
        Alumni::factory(10)->create();
        Lecturer::factory(10)->create();
        Tridharma::factory(50)->create();
        News::factory(10)->create();
    }
}
