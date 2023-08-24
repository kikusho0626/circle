<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '菊池 祥汰',
            'email' => 'kikusho-snivy@kph.biglobe.ne.jp',
            'password'  => 'kikusho0626',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'bio' => '東京理科大学　理工学部　情報化学科卒\n横浜国立大学大学院　数物・電子情報系理工学専攻　在学\n学部時代はバンドSloyd Nodeを運営（これはユーザのプロフィールです）',
            'icon' => 'https://pbs.twimg.com/profile_images/1627687481952063489/6CKflKa9_400x400.jpg',
        ]);
        DB::table('users')->insert([
            'name' => 'Yuto Suzuki ',
            'email' => 'dummy@mail.com',
            'password'  => 'Yuto',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'bio' => 'ソロシンガー\nレーベルStudio"Node"所属\nバンドSloyd Nodeのボーカル（これはユーザのプロフィールです）',
            'icon' => 'https://pbs.twimg.com/profile_images/1691479644263129088/jB3bTFPQ_400x400.jpg',
        ]);
    }
}
