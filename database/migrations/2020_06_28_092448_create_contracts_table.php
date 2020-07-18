<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('shomare')->nullable();
            $table->string('vaziat')->nullable();
            $table->string('taraf')->nullable();
            $table->string('onvan')->nullable();
            $table->string('riali')->nullable();
            $table->string('arzi')->nullable();
            $table->string('mablaghNahaeiRiali')->nullable();
            $table->string('mablaghNahaeiRialiArzi')->nullable();
            $table->string('tarikhAghd')->nullable();
            $table->string('tarikhEblagh')->nullable();
            $table->string('shomareEblagh')->nullable();
            $table->string('tarikhShoroo')->nullable();
            $table->string('moddatAvvalie')->nullable();
            $table->string('dateType')->nullable();
            $table->string('tarikhEtmam')->nullable();
            $table->string('moddatBaghimande')->nullable();
            $table->string('shomareSooratvaziat')->nullable();
            $table->string('mablaghSootarvaziatRiali')->nullable();
            $table->string('mablaghSootarvaziatArzi')->nullable();
            $table->string('darsadPishraftMali')->nullable();
            $table->string('tazminAnjam')->nullable();
            $table->string('tazminPishpardakht')->nullable();
            $table->string('tazminHosn')->nullable();
            $table->string('mojavvezFaliatTarikh')->nullable();
            $table->string('mojavvezShomare')->nullable();
            $table->string('tahvilMovaghatTarikh')->nullable();
            $table->string('mohlatRafNaghs')->nullable();
            $table->string('tarikhRafNaghs')->nullable();
            $table->string('moddatDoreTazmin')->nullable();
            $table->string('tahvilGhatiTarikh')->nullable();
            $table->string('mafasa')->nullable();
            $table->string('address')->nullable();
            $table->string('modiramel')->nullable();
            $table->string('namayande')->nullable();
            $table->string('mobile')->nullable();
            $table->string('tel')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('balanceMaterial')->nullable();
            $table->text('sooorathesabNahaei')->nullable();
            $table->text('omoorPending')->nullable();
            $table->string('type')->nullable();
            $table->string('miladi')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
