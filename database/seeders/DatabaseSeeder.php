<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'name' => 'madushka',//Str::random(10),
            'email' => 'madu@gmail.com',//Str::random(10).'@gmail.com', 
            'gender'=>'f',
            'address' =>'kaluthara',
            'mobile' => '0752337142',
	        'password' => Hash::make('test123'),            
	        'remember_token' => Str::random(10), ]);
    }
}
