<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'admin'
            ]);
            DB::table('users')->insert([
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'customer'
            ]);
            DB::table('salons')->insert([
                'title' => 'Good one',
                'adress' => 'Street name 1',
                'tel' => '869954685'            
            ]);
            DB::table('salons')->insert([
                'title' => 'Better one',
                'adress' => 'Street name 2',
                'tel' => '869954694'            
            ]);
            DB::table('salons')->insert([
                'title' => 'DJ gorgeous',
                'adress' => 'Street name 16',
                'tel' => '869955585'            
            ]);
            DB::table('salons')->insert([
                'title' => 'Elite beauty',
                'adress' => 'Street name 15',
                'tel' => '869454685'            
            ]);
            DB::table('services')->insert([
                'title' => 'Mens haircut',
                'min' => '30',
                'price' => '20.00'            
            ]);
            DB::table('services')->insert([
                'title' => 'Women haircut',
                'min' => '60',
                'price' => '50.00'            
            ]);
            DB::table('services')->insert([
                'title' => 'Buzzcut',
                'min' => '10',
                'price' => '15.00'            
            ]);
            DB::table('services')->insert([
                'title' => 'Bride hairstyling',
                'min' => '80',
                'price' => '120.00'            
            ]);
            DB::table('services')->insert([
                'title' => 'Groom hairstyling',
                'min' => '40',
                'price' => '80.00'            
            ]);
            DB::table('services')->insert([
                'title' => 'Face massage',
                'min' => '30',
                'price' => '50.00'            
            ]);
            DB::table('services')->insert([
                'title' => 'Beard stuff',
                'min' => '30',
                'price' => '30'            
            ]);
            DB::table('masters')->insert([
                'name' => 'Mikael',
                'surname' => 'Vamanos',
                'salon_id' => '1'            
            ]);
            DB::table('masters')->insert([
                'name' => 'Oskar',
                'surname' => 'Tiguan',
                'salon_id' => '1'            
            ]);
            DB::table('masters')->insert([
                'name' => 'Ben',
                'surname' => 'Ten',
                'salon_id' => '2'            
            ]);
            DB::table('masters')->insert([
                'name' => 'Ben',
                'surname' => 'Pen',
                'salon_id' => '2'            
            ]);
            DB::table('masters')->insert([
                'name' => 'Osama',
                'surname' => 'Bin',
                'salon_id' => '3'            
            ]);
            DB::table('masters')->insert([
                'name' => 'Laden',
                'surname' => 'Banen',
                'salon_id' => '3'            
            ]);
            DB::table('masters')->insert([
                'name' => 'Zody',
                'surname' => 'Cody',
                'salon_id' => '4'            
            ]);
            DB::table('masters')->insert([
                'name' => 'Ben',
                'surname' => 'Shakiro',
                'salon_id' => '4'            
            ]);

    }

}
