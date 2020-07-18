<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('owner');
            $table->string('preparedBy');
            $table->string('rev');
            $table->string('discipline');
            $table->string('discipline1');
            $table->string('discipline2');
            $table->string('discipline3');
            $table->string('discipline4');
            $table->string('companyName');
            $table->string('origin');
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
        Schema::dropIfExists('avls');
    }
}
