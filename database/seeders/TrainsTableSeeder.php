<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\it_IT\Company;
use Faker\Provider\it_IT\Address;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50 ; $i++) { 
            $new_train = new Train();
            $new_train->agency = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_date = $faker->date();
            $new_train->arrival_date = $faker->date();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->isbn10();
            $new_train->number_carriages = $faker->numberBetween(10, 30);
            $new_train->in_time = $faker->boolean();
            $new_train->deleted = $faker->boolean();
            $new_train->save();
        }
    }
}
