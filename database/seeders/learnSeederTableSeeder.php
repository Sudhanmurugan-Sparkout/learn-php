<?php

namespace Database\Seeders;

use App\Models\learnSeeder;
use Database\Factories\learnFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class learnSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('learn_seeders')->insert([
            'name'=>Str::random(10),
            'email'=>Str::random(15).'@gmail.com',
            'number'=>rand(1,10)
        ]);

  
    }
}
