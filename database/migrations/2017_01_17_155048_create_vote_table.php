<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('type')->default('0'); // 0 Login to vote; 1 only tickets; 2 both can.
            $table->string('voted_user')->nullable();
            $table->string('started_at');
            $table->string('ended_at');
            $table->string('intro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('votes');
    }
}
