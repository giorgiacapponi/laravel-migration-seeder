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
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<30;$i++){
            $new_train= new Train();
            $new_train->scheduled=$faker->randomElement(['2023-05-25','2023-05-26','2023-05-27']);
            $new_train->company=$faker->randomElement(['trenitalia','italo']);
            $new_train->departure_station=$faker->city();
            $new_train->arrival_station=$faker->city();
            $new_train->departure_time=$faker->time('h:i');
            $new_train->arrival_time=$faker->time('h:i');
            $new_train->train_code=$faker->bothify('??-#####');
            $new_train->delay=$faker->numberBetween(0,1);
            $new_train->deleted=$faker->numberBetween(0,1);
            $new_train->save();
        }
    }
}
