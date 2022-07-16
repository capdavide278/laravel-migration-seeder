<?php

use App\Train;
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
        for($i=0; $i<100; $i++){
            $train = new Train();
            $train->azienda = $faker -> company();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->created_at = '08:22:15'; 
            $train->updated_at = '08:58:45';
            $train->orario_di_partenza = $faker -> time();
            $train->orario_di_arrivo = $faker -> time();
            $train->numero_carrozze =$faker->randomDigit();
            $train->in_orario = !rand(0, 1);
            $train->cancellato = !rand(0, 1);
            $train->save();
        }
    }
}
