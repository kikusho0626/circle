<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Art;
use App\Models\User;

class ArtUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ユーザーと投稿のデータを用意
        $users = User::all();
        $arts = Art::all();

        // art_user テーブルにデータを挿入
        foreach ($arts as $art) {
            foreach ($users as $user) {
                DB::table('art_user')->insert([
                    'art_id' => $art->id,
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
