<?php

namespace Database\Factories;

use App\Models\Command;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Command::class;

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
            'content' => $this->faker->name,
            'likes' => $this->faker->numberBetween(1,10),
            'dislikes' => $this->faker->numberBetween(1,10),
        ];
    }
}
