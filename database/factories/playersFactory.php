<?php

namespace Database\Factories;

use App\Models\players;
use App\Models\team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PlayersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=players::class;
    public function definition()
    {
        return [
        
            'name'=>fake()->name(),
            'email'=>fake()->unique()->safeEmail(),
            'number'=>rand(1,10),
            'health_condition'=>"Good",
            'team_id'=>team::newFactory()
          ];
    }

    public function health()
    {
      return   $this->state(function(array $value){
        return ['health_condition'=>"Injury"];
      });
    
    
    }
}
