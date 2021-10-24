<?php

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('travel')->truncate();

        $travel=[];
        for ($i=0; $i<50; $i++){
            $travel[] = [
                'title'=>$faker->words($faker->numberBetween(1,3), true),
                'destination'=>$faker->city,
                'publisher' =>$faker->randomElement(['Kamil','Klaudia', 'Arek', 'Piotrek', 'Justyna','Rafał','Bartek','Paweł','Angela']),
                'continent_id'=>$faker->numberBetween(1,6),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
                'score'=>$faker->numberBetween(1,6),

            ];
        }

        DB::table('travel')->insertOrIgnore($travel);

    }
}
