<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDcisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dcis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('DocNo')->nullable();
            $table->string('Rev')->nullable();
            $table->string('Title')->nullable();
            $table->text('OwnerDocNo')->nullable();
            $table->string('SubPhase')->nullable();
            $table->string('POI')->nullable();
            $table->string('OwnersAction')->nullable();
            $table->string('Dept')->nullable();
            $table->string('ExtTransNo')->nullable();
            $table->string('ExtTransIssuedDate')->nullable();
            $table->string('EmployerExternalCommentsDate')->nullable();
            $table->string('EmployerExternalApprovalDate')->nullable();
            $table->string('RepliedByEmployer')->nullable();
            $table->string('EmployerDelay')->nullable();
            $table->string('ViewedBy')->nullable();
            $table->string('ViewedDate')->nullable();
            $table->string('WT')->nullable();
            $table->string('DOCCOD')->nullable();
            $table->string('START')->nullable();
            $table->string('IFRIFI')->nullable();
            $table->string('IFPIFEIFCORIFE')->nullable();
            $table->string('IFCIFE')->nullable();
            $table->string('lastHardCopyReceivedDate')->nullable();
            $table->string('LastCommentDate')->nullable();
            $table->string('LastCommentSheetNumber')->nullable();
            $table->string('SentToSiteDate')->nullable();
            $table->string('Status')->nullable();
            $table->string('ACTUAL')->nullable();

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
        Schema::dropIfExists('dcis');
    }
}
