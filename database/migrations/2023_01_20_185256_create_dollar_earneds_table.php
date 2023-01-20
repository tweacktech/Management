<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDollarEarnedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dollar_earneds', function (Blueprint $table) {
            $table->id();
            $table->foreignid('post_id')->reference('posts')->on('id');
            $table->float('amount_earned')->default(3.00);
            $table->string('user_device');
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
        Schema::dropIfExists('dollar_earneds');
    }
}
