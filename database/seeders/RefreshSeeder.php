<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RefreshSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('refreshes')->insert([
            'refresh' => 300,
            'is_selected' => true,
        ]);

        DB::table('refreshes')->insert([
            'refresh' => 600,
            'is_selected' => false,
        ]);

        DB::table('refreshes')->insert([
            'refresh' => 900,
            'is_selected' => false,
        ]);
    }
}
