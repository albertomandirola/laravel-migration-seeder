<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
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
        for ($i = 0; $i < 40; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->words(2, true);
            $newTrain->departure_station = $faker->words(5, true);
            $newTrain->arrival_station = $faker->words(5, true);
            $newTrain->departure_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->numberBetween(10000, 99999);
            $newTrain->carriages_number = $faker->numberBetween(5, 20);
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();

            $newTrain->save();
        }
    }
}
