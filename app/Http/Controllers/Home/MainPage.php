<?php

declare(strict_types=1);

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MainPage extends Controller
{
    public function __invoke()
    {
        return view('home.main');

        DB::table('continent')->truncate(); //czyszczenie bazy by wszystkie instrukcje wykonały się na świeżej (w celu nauki)
        //DB::table('continent')->delete(); //nie resetuje klucza głównego

        DB::table('continent')->insertOrIgnore(
            [
                [
                    'name'=> "EUROPA",
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now()
                ],
                [
                    'name'=> "AZJA",
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now()
                ],
                [
                    'name'=> "AMERYKA Pd.",
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now()
                ],
                [
                    'name'=> "AFRYKA",
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now()
                ]


            ]
        );




    }


}
