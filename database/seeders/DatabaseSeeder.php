<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB as DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use function Laravel\Prompts\table;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('barangs')->insert([
            'id_barang' => 1,
            'name' => 'Bubur Jagung',
            'category' => 'Sayur',
            'supplier' => 'Alfamarrt',
            'stock' => $faker->numberBetween(10,100),
            'price' => $faker->numberBetween(1000,100000),
            'note' => 'Tidak ada',
        ]);
        DB::table('barangs')->insert([
            'id_barang' => 2,
            'name' => 'Bubur Kedelai',
            'category' => 'Sayur',
            'supplier' => 'Indomaret',
            'stock' => $faker->numberBetween(10,100),
            'price' => $faker->numberBetween(1000,100000),
            'note' => 'Tidak ada',
        ]);
        DB::table('barangs')->insert([
            'id_barang' => 3,
            'name' => 'Bubur Buah',
            'category' => 'Buah',
            'supplier' => 'Alfamaret',
            'stock' => $faker->numberBetween(10,100),
            'price' => $faker->numberBetween(1000,100000),
            'note' => 'Tidak ada',
        ]);
        DB::table('barangs')->insert([
            'id_barang' => 4,
            'name' => 'Bubur Kacang Hijau',
            'category' => 'Buah',
            'supplier' => 'Indomaret',
            'stock' => $faker->numberBetween(10,100),
            'price' => $faker->numberBetween(1000,100000),
            'note' => 'Tidak ada',
        ]);
        DB::table('barangs')->insert([
            'id_barang' => 5,
            'name' => 'Bubur Apel',
            'category' => 'Sayur',
            'supplier' => 'Indomaret',
            'stock' => $faker->numberBetween(10,100),
            'price' => $faker->numberBetween(1000,100000),
            'note' => 'Tidak ada',
        ]);

        DB::table('users')->insert([
            'id_user' => 1,
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => 'admin123',
        ]);

        

       
        
    }
}
