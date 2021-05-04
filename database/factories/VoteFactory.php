<?php

namespace Database\Factories;

use App\Models\Vote;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,10),
            'post_id' => $this->faker->numberBetween(1,10),
            'command_id' => $this->faker->numberBetween(1,10),
            'status' => $this->faker->numberBetween(1,2),
        ];
    }
}
