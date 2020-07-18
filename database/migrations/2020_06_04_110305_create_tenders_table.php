<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('radif');
            $table->string('mozoo');
            $table->string('tarikhShorooBoroonsepari');
            $table->string('arzi');
            $table->string('riali');
            $table->string('moddat');
            $table->string('mablaghTazmin');
            $table->string('sherkatHa');
            $table->string('tarikhDavat');
            $table->string('tedadPishnahadat');
            $table->string('tarikhBazgoshaei');
            $table->string('sherkatBarande');
            $table->string('mablaghBarande');
            $table->string('mablaghBarandeRiali');
            $table->timestamp('tarikhGharardad')->nullable();
            $table->string('shomareGHarardad');
            $table->string('tozihat');
            $table->unsignedInteger('user_id')->nullable();
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
        Schema::dropIfExists('tenders');
    }
}
