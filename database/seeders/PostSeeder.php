<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Art;
use App\Models\User;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => '恒雨の森/Sloyd Node',
            'body' => 'これはbodyです',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'art_id' => 1, // 正しい外部キーの値を代入
            'user_id' => 1, // 正しい外部キーの値を代入
        ]);
        DB::table('posts')->insert([
            'title' => '閉鎖病棟/Sloyd Node',
            'body' => 'これはbodyです',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'art_id' => 2, // 正しい外部キーの値を代入
            'user_id' => 1, // 正しい外部キーの値を代入
        ]);
    }
}
