<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //外部キー制約
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

            //->nullable()で言葉がない場合もエラーを吐かないようにする。
            $table->string('shozoku')->nullable();
            $table->date('nyushanenngappi')->nullable();
            $table->string('yakushoku')->nullable();
            $table->string('koyoukeitai')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
};
