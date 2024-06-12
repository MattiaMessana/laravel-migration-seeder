<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            //genera dati in italiano
            $faker = Faker\Factory::create('it_IT');
            //creiamo nuovo treno da inserire nel DB
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->date_ticket = $faker->dateTimeBetween(now(), '+4 week');
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time('H:i');
            $newTrain->arrival_time = $faker->time('H:i');
            $newTrain->platform = $faker->numberBetween(2, 15);
            $newTrain->train_code = $faker->numberBetween(1000, 3400);
            $newTrain->train_cars = $faker->numberBetween(1, 10);
            $newTrain->is_on_time = $faker->numberBetween(0, 1);
            $newTrain->is_deleted = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
