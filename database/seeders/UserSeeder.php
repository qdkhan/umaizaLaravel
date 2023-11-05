<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('users')->updateOrinsert(['email' => 'qdkhan05@gmail.com'], ['name' => 'Qutbuddin', 'password' => Hash::make('123456789'), 'role' => 1, 'phone' => 9616279623, 'address' => 'Lucknow']);
    }
}
