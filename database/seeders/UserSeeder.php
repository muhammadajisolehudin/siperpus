<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create('id_ID');
        // for($i = 1; $i <= 20; $i++){
        DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'admin1@mail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('12345678'),
        'created_at' => now(),
        'updated_at' => now(),
        ]);
    }
}

