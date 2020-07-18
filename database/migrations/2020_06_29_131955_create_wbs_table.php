<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wbs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ActivityID');
            $table->string('status');
            $table->string('code');
            $table->string('name');
            $table->string('wf');
            $table->string('budgeted');
            $table->string('planStart');
            $table->string('planFinish');
            $table->string('planDeviation');
            $table->string('actStart');
            $table->string('actFinish');
            $table->string('actDeviation');
            $table->string('resources');
            $table->string('progress');
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
        Schema::dropIfExists('wbs');
    }
}
