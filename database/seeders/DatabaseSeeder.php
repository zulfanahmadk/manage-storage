<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeder untuk movement item
        $this->call([
            ItemSeeder::class,         // Seeder untuk tbl_item, dijalankan dulu
            MovementItemSeeder::class, // Seeder yang tergantung kedua seeder di atas, dijalankan terakhir
        ]);
    }
}
