<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'huy',
            'email'=>'cocdh123@gmail.com',
            'phone'=>'0963758993',
            'password'=>Hash::make('12345678'),
            'role'=>'admin-user',
            'created_at' => now(),
        ]);
    }
}
