<?php

namespace Database\Seeders;

use App\Models\Sector;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::inRandomOrder()->first();
        $sector = Sector::inRandomOrder()->first();
        DB::table('empleados')->insert([
            'sector_id'=> $sector->id,
            'user_id'=> $user->id,
            'nombre' => 'Fran',
            'apellido' => 'Santos',
            'telefono' => '11481234',
            'direccion' => 'soler1234',
            'email' => 'fran@gmail.com',
            'sueldo'=> '200000',
            'cumple'=> '2000-09-09',
            'puesto'=> 'supervisor',
            'comision_vendedor'=> '20000',

            
            'created_at' => now(),
            'updated_at' => now(),       
        ]);
    }
}
