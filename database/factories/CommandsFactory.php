<?php

namespace Database\Factories;

use App\Models\Commands;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commands::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,10),
            'content' => $this->faker->paragraph(5),
            'likes' => $this->faker->numberBetween(1,10),
            'dislikes' => $this->faker->numberBetween(1,10),
        ];
    }
}
