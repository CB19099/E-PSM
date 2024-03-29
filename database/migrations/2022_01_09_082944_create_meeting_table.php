<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->integer('SV_ID');
            $table->integer('STD_ID');
            $table->date('Meeting_Date');
            $table->time('Meeting_Start');
            $table->time('Meeting_End');
            $table->string('Meeting_Purpose');
            $table->string('Meeting_Status');
            $table->string('Meeting_Comment');
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
        Schema::dropIfExists('meeting');
    }
}
