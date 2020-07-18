<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRcisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rcis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Discipline');
            $table->string('RequisitionNumber');
            $table->string('Description');
            $table->string('Type');
            $table->string('IssueForInquiry');
            $table->string('VendorQuotations');
            $table->string('TBA');
            $table->string('VendorSelection');
            $table->string('PurchaseOrder');
            $table->string('EffectiveDate');
            $table->string('KickOffMeeting');
            $table->string('Engineering');
            $table->string('SupplyRawMaterial');
            $table->string('Manufacturing');
            $table->string('FinalInspectionInspectionCertificate');
            $table->string('FOBExworkDelivery');
            $table->string('BookingOfVessel');
            $table->string('AdvanceShippingNotice');
            $table->string('SeaTransportation');
            $table->string('CustomClearance');
            $table->string('SiteDelivery');
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
        Schema::dropIfExists('rcis');
    }
}
