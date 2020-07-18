<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vpis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('DocNo');
            $table->string('Rev');
            $table->string('Title');
            $table->string('RequisitionNo');
            $table->string('VendorName');
            $table->string('PlanReceivedDate');
            $table->string('VendorUploadDate');
            $table->string('Status');
            $table->string('VendorIssuedDate');
            $table->string('IssuedByVendor');
            $table->string('VendorDelay');
            $table->string('PIDECCommentDate');
            $table->string('PIDECNoCommentDateEDMS3');
            $table->string('PIDECNoCommentDate');
            $table->string('PIDECMinorCommentDate');
            $table->string('PIDECMajorCommentDate');
            $table->string('PIDECInformationCommentDate');
            $table->string('PIDECRejectCommentDate');
            $table->string('PIDECREEmailDate');
            $table->string('PIDECRTSEmailDate');
            $table->string('RepliedByPIDEC');
            $table->string('OriginatorDelay');
            $table->string('viewedBy');
            $table->string('ViewdDate');
            $table->string('EmployerExternalCommentDate');
            $table->string('EmployerExternalApprovalDate');
            $table->string('IsAccessibleByEmployer');
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
        Schema::dropIfExists('vpis');
    }
}
