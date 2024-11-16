<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\City;
use App\Models\Media;
use App\Models\User;

class MediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Media::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'approved' => $this->faker->boolean(),
            'type' => $this->faker->randomElement(["audio","image","video"]),
            'user_id' => User::factory(),
            'city_id' => City::factory(),
            'google_id' => $this->faker->word(),
        ];
    }
}
