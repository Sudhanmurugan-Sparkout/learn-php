<?php

namespace Database\Factories;

use App\Models\company;
use App\Models\team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = team::class;

    public function definition()
    {
        return [
            'name' => $this->faker->words(2, true),
            'company_id' => company::all()->random()->id,
        ];
    }
}
