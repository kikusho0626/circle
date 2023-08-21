<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('arts')->insert([
            'name' => '恒雨の森',
            'url' => 'https://www.youtube.com/watch?v=aErFrGSBkN0',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('arts')->insert([
            'name' => '閉鎖病棟',
            'url' => 'https://www.youtube.com/watch?v=iPH1IJppjMA',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);        
    }
}
