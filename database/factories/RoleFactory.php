<?php

namespace Database\Factories;

use App\Models\role;
use App\Models\team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
     protected $model = role::class;

    public function definition()
    {
        return [
            'name' => $this->faker->jobTitle,
            'team_id' => Team::all()->random()->id,
        ];
    }
}
