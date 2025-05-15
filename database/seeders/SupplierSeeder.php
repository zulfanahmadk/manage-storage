<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Jalankan database seeder untuk tabel suppliers.
     *
     * @return void
     */
    public function run(): void
    {
        // Pastikan model Supplier menggunakan HasFactory di dalam modelnya
        // Menggunakan factory untuk membuat 50 data supplier palsu
        Supplier::factory()->count(50)->create();
    }
}
