<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MovementItem;
use App\Models\Item;
use App\Models\User;

class MovementItemFactory extends Factory
{
    protected $model = MovementItem::class;

    public function definition()
    {
        return [
            'item_id'       => Item::inRandomOrder()->first()->item_id ?? 1,
            'movement_type' => $this->faker->randomElement(['in', 'out']),
            'id'            => User::inRandomOrder()->first()->id ?? 1,
            'quantity'      => $this->faker->numberBetween(1, 100),
            'movement_date' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'notes'         => $this->faker->sentence(),
        ];
    }
}
