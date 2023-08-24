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
            'artist' => 'Sloyd Node',
            'url' => 'https://www.youtube.com/watch?v=aErFrGSBkN0',
            'explain' => 'Sloyd Node 3rd ep収録\n作詞作曲：菊池祥汰\n歌唱：Yuto Suzuki',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('arts')->insert([
            'name' => '閉鎖病棟',
            'artist' => 'Sloyd Node',
            'url' => 'https://www.youtube.com/watch?v=iPH1IJppjMA',
            'explain' => 'Sloyd Node 1st album収録\n作詞作曲：菊池祥汰\n歌唱：Yuto Suzuki',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);        
    }
}
