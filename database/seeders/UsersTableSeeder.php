<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'full_name'=>'Kawsar Ahmd',
                'username'=>"kawsar",
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('1234567'),
                'role'=>'admin',
                'status'=>'active'
            ],
            [
                'full_name'=>'Kawsar Ahmd',
                'username'=>"kawsar",
                'email'=>'vendor@gmail.com',
                'password'=>Hash::make('1234567'),
                'role'=>'vendor',
                'status'=>'active'
            ],
            [
                'full_name'=>'Kawsar Ahmd',
                'username'=>"kawsar",
                'email'=>'customer@gmail.com',
                'password'=>Hash::make('1234567'),
                'role'=>'customer',
                'status'=>'active'
            ],
        ]);
    }
}