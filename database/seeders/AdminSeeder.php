<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'Admin 1',
            'username' => 'admin1',
            'password' => Hash::make('admin1'),
        ]);

        DB::table('admins')->insert([
            'name' => 'Admin 2',
            'username' => 'admin2',
            'password' => Hash::make('admin2'),
        ]);

        DB::table('admins')->insert([
            'name' => 'Admin 3',
            'username' => 'admin3',
            'password' => Hash::make('admin3'),
        ]);
    }
}
