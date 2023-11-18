<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DPOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("dpos")->insert([
            'nama' => 'farhan fakhri',
            'keterangan' => '3 semester di nyatakan hilang bebas',
            'bounty' => '13.500.000 jt',
        ]);
    }
}
