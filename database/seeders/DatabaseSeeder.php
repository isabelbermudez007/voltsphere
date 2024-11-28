<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([AutoSeeder::class]);
        User::factory()->create([
            'name' => 'isabel',
            'lastname' => 'bermudez',
            'phone' => '11481234',
            'address' => 'armenia 2384',
            'city' => 'CABA',
            'state' => 'CABA',
            'zip_code' => '1424',
            'email' => 'isabel@gmail.com',
            'password' => Hash::make('1234'),
              'role' => 'ventas',        
        ]);
    
    User::factory()->create([
        'name' => 'francisco',
        'lastname' => 'camacho',
        'phone' => '11481234',
        'address' => 'soler 4444',
        'city' => 'CABA',
        'state' => 'CABA',
        'zip_code' => '1414',
        'email' => 'francisco@gmail.com',
        'password' => Hash::make('1234'),
          'role' => 'sistemas',        
    ]);
    User::factory()->create([
        'name' => 'nancy',
        'lastname' => 'melo',
        'phone' => '11481234',
        'address' => 'ortiz 1840',
        'city' => 'CABA',
        'state' => 'CABA',
        'zip_code' => '1414',
        'email' => 'nancy@gmail.com',
        'password' => Hash::make('1234'),
                
    ]);
}  
}
