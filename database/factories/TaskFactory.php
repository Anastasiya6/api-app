<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'team_id' => Team::all()->random()->id,
            'title' => $this->faker->unique()->sentence(),
            'description' =>  $this->faker->text(),
            'status' => $this->faker->randomElement(['pending', 'in progress', 'completed'])
        ];
    }
}
