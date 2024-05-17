<?php

namespace Database\Seeders;

use App\Models\players;
use Carbon\Factory;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        players::factory()->count(10)->create();
    }
}
