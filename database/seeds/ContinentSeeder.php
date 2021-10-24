<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continent')->truncate(); //zaimplementować Illuminate Facades/DB

        DB::table('continent')->insertOrIgnore([
            ['id'=>1,'name'=>'EUROPA', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['id'=>2,'name'=>'AZJA', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['id'=>3,'name'=>'AMERYKA Pd.', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['id'=>4,'name'=>'AMERYKA Pn.', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['id'=>5,'name'=>'AFRYKA', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['id'=>6,'name'=>'AUSTRALIA', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],

        ]);

    }
}
