<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $departure = $faker->dateTimeBetween('now', '+1 day');
        $arrival = $faker->dateTimeBetween($departure, (clone $departure)->modify('+1 day'));

        for ($i = 0; $i < 10; $i++) {

            $newTrain = new Train();

            $newTrain->company = $faker->company;
            $newTrain->departure_station = $faker->city;
            $newTrain->arrival_station = $faker->city;
            $newTrain->departure_time = $departure;
            $newTrain->arrival_time = $arrival;
            $newTrain->train_code = $faker->regexify('[A-Z]{2}[0-9]{4}');
            $newTrain->carriages = $faker->numberBetween(5, 20);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_cancelled = $faker->boolean();

            $newTrain->save();
        }
    }
}
