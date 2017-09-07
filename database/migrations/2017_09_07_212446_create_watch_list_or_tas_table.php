<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchListOrTasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watch_list_or_tas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shiller_id');
            $table->string('name');
            $table->string('symbol');
            $table->string('description');
            $table->string('trading_view');
            $table->string('trading_view_ideas');
            $table->string('twitter_ideas');
            $table->string('reddit');
            $table->boolean('is_active');
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
        Schema::dropIfExists('watch_list_or_tas');
    }
}
