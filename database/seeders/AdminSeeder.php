<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        User::create([
            'name' => 'Admin User',
            'email' => 'admin_aknana@gmail.com',
            'password' => bcrypt('aknana.123'),
            
        ]);
   
    }
}
