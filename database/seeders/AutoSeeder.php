<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table("autos")->insert([
            [
                "marca"=> "Mercedes-Benz",
                "modelo" => "clase A",
                "anio"=> 2022,
                "color"=> "gris",
                "precio"=>  200.00,
                "descripcion"=> "deportivo, elegante",


            ],["marca"=> "Mercedes-Benz",
                "modelo" => "clase S",
                "anio"=> 2023,
                "color"=> "negro",
                "precio"=>  300.00,
                "descripcion"=> "clasico",],
        ]);
    }
}
