<?php

namespace Database\Factories;

use App\Models\Event_city;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class Event_CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event_city::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city' => $this->faker->city(),
            'code_postal' => $this->faker->postcode(),
            'region' => $this->faker->state(),
        ];
    }
}
