<?php

namespace Database\Factories\management;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\team;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=team::class;

    public function definition()
    {
        return [
            'name'=>fake()->company(),
            'description'=>fake()->paragraph(20)
        ];
    }
}
