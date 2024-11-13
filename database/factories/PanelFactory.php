<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\City;
use App\Models\Panel;

class PanelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Panel::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'value' => $this->faker->word(),
            'cartridge' => $this->faker->randomElement(["red","blue","brown","yellow"]),
            'port' => $this->faker->randomElement(["a","b","c","d","1","2","3","4"]),
            'city_id' => City::factory(),
        ];
    }
}
