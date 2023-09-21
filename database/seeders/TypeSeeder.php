<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//models
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::truncate();
        for ($i=0; $i < 10; $i++) { 
           Type::create([
             'title'=> substr(fake()->sentence(3),0,64),
             'description'=> fake()->paragraph(),
           ]);
        }
    }
}
