<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHallmapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hallmaps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vip');
            $table->string('general');
            $table->string('event_id');
            $table->timestamps();
        });

        Schema::table('hallmaps', function ($table){
                    $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
                });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hallmaps');
    }
}
