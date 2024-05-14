<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB as DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use function Laravel\Prompts\table;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('users')->insert([
            'id_user' => 1,
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => 'admin123',
        ]);
        
        

       
        
    }
}
