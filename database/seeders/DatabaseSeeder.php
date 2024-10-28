<?php

namespace Database\Seeders;

use App\Models\Hospital;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Doctor::factory(10)->create();
        Hospital::factory(20)->create();

        $doctors = Doctor::all();

        foreach($doctors as $doctor){
            $doctor->hospitals()->attach(
                Hospital::inRandomOrder()->take(rand(1,4))->pluck('id'),[
                    'contract_start_date' => fake()->date(),
                    'contract_end_date' => fake()->date(),
                    'isPartTime' => rand(0,1)
                ]

            );
        }

    }
}
