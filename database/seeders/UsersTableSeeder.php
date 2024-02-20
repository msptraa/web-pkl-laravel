<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Perbaiki penulisan use statement

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
            'name' => 'Putra',
            'email' => 'admin_unique@gmail.com', // Ubah email menjadi unik
            'password' => Hash::make('blablabla2134')
        ]);
    }
}
