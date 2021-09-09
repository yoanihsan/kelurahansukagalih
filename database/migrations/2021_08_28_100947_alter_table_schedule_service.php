<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableScheduleService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        //
        Schema::dropIfExists('schedule_service');

        Schema::create("schedule_service", function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->string('category');
            $table->date('book_date');
            $table->biginteger('service_id');
            $table->string('name');
            $table->biginteger('queue');
            $table->biginteger('phone_number');
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
