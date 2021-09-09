<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JadwalLayanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("schedule_service", function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->date('book_date');
            $table->biginteger('category_id');
            $table->string('name');
            $table->biginteger('queue');
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
        Schema::dropIfExists('schedule_service');
    }
}
