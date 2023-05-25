<?php

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Train::create([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->time('H:i:s'),
                'arrival_time' => $faker->time('H:i:s'),
                'train_code' => $faker->unique()->regexify('[A-Z]{3}[0-9]{3}'),
                'carriages' => $faker->numberBetween(1, 10),
                'on_time' => $faker->boolean,
                'cancelled' => $faker->boolean,
            ]);
        }
    }
}