<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DutySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('calls')->insert([
            'character' => 'Simon Riley',
            'PlaceOfBirth' => 'Inggris',
            'unity' => 'Task Force 141, SAS UK',
            'nickName'=> 'Ghost',
            'age'=> '24',
            'history'=> 'Lieutenant Simon "Ghost" Riley is a British special forces operator, and a prominent member of Task Force 141, known for his iconic skull-patterned balaclava, headset, and dark red sunglasses.'
        ]);
    }
}
