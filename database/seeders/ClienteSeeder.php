<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::inRandomOrder()->first();
        DB::table('clientes')->insert([
            'user_id'=> $user->id,
            'nombre' => 'isabel',
            'apellido' => 'bermudez',
            'telefono' => '11481234',
            'direccion' => 'armenia 2384',
            'email' => 'isabel@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),       
        ]);
    }
}
