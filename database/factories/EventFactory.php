<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Event;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'event_name' => fake()->word(),
            'start_date' => fake()->dateTime(),
            'end_date' => fake()->dateTime(),
            'description' => fake()->text(),
            'photo' => fake()->text(),
            'organizer' => fake()->word(),
            'location' => fake()->word(),
            'detail_description' => fake()->text(),
            'max_capacity' => fake()->numberBetween(-10000, 10000),
            'tickets_bought' => fake()->numberBetween(-10000, 10000),
        ];
    }
}
