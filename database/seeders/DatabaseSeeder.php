<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB as DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

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
            'bahan_baku' => 'Jagung',
            'category' => 'Sayur',
            'supplier' => 'Alfamarrt',
            'stock' => $faker->numberBetween(10,100),
            'price' => $faker->numberBetween(1000,100000),
            'note' => 'Tidak ada',
        ]);
        DB::table('barangs')->insert([
            'id_barang' => 2,
            'name' => 'Bubur Kedelai',
            'bahan_baku' => 'Kedelai',
            'category' => 'Sayur',
            'supplier' => 'Indomaret',
            'stock' => $faker->numberBetween(10,100),
            'price' => $faker->numberBetween(1000,100000),
            'note' => 'Tidak ada',
        ]);
        DB::table('barangs')->insert([
            'id_barang' => 3,
            'name' => 'Bubur Bayam',
            'bahan_baku' => 'Bayam',
            'category' => 'Buah',
            'supplier' => 'Alfamaret',
            'stock' => $faker->numberBetween(10,100),
            'price' => $faker->numberBetween(1000,100000),
            'note' => 'Tidak ada',
        ]);
        DB::table('barangs')->insert([
            'id_barang' => 4,
            'name' => 'Bubur Kacang Hijau',
            'bahan_baku' => 'Kacang Hijau',
            'category' => 'Buah',
            'supplier' => 'Indomaret',
            'stock' => $faker->numberBetween(10,100),
            'price' => $faker->numberBetween(1000,100000),
            'note' => 'Tidak ada',
        ]);
        DB::table('barangs')->insert([
            'id_barang' => 5,
            'name' => 'Bubur Apel',
            'bahan_baku' => 'Apel',
            'category' => 'Sayur',
            'supplier' => 'Indomaret',
            'stock' => $faker->numberBetween(10,100),
            'price' => $faker->numberBetween(1000,100000),
            'note' => 'Tidak ada',
        ]);

        DB::table('users')->insert([
            'id_user' => 1,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
        ]);

        DB::table('karyawan')->insert([
            'id' => 1,
            'name' => $faker->name(),
            'umur' => rand(20,50),
            'alamat' => $faker->address(),
            'gaji' => rand(2000000,5000000),
            'jabatan' => 'CEO',
        ]);
        DB::table('karyawan')->insert([
            'id' => 2,
            'name' => $faker->name(),
            'umur' => rand(20,50),
            'alamat' => $faker->address(),
            'gaji' => rand(2000000,5000000),
            'jabatan' => 'Seketaris',
        ]);
        DB::table('karyawan')->insert([
            'id' => 3,
            'name' => $faker->name(),
            'umur' => rand(20,50),
            'alamat' => $faker->address(),
            'gaji' => rand(2000000,5000000),
            'jabatan' => 'Bendahara',
        ]);
        DB::table('karyawan')->insert([
            'id' => 4,
            'name' => $faker->name(),
            'umur' => rand(20,50),
            'alamat' => $faker->address(),
            'gaji' => rand(2000000,5000000),
            'jabatan' => 'Admin',
        ]);

        

       
        
    }
}
