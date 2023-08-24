<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('art_id')->comment('カテゴリID');
            $table->foreign('art_id')->references('id')->on('arts')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->comment('商品ID');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('art_user');
    }
};
