<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendareventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendarevents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->timestamp('start')->nullable();;
            $table->timestamp('end')->nullable();
            $table->enum('type', ['meeting', 'personal']);
            $table->unsignedInteger('user_id')->nullable();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('calendarevents');
    }
}
