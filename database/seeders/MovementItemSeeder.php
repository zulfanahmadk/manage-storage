<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MovementItem;

class MovementItemSeeder extends Seeder
{
    public function run(): void
    {
        MovementItem::factory()->count(50)->create();
    }
}
