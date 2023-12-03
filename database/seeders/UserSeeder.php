<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username'=>'Rezal',
            'email'=>'rezal@gmail.com',
            'password'=>bcrypt('12345'),
            'fk_role'=>'1'
        ]);
        DB::table('users')->insert([
            'username'=>'April',
            'email'=>'april@gmail.com',
            'password'=>bcrypt('12345'),
            'fk_role'=>'2'
        ]);
        DB::table('users')->insert([
            'username'=>'Yani',
            'email'=>'yani@gmail.com',
            'password'=>bcrypt('12345'),
            'fk_role'=>'3'
        ]);
    }
}
