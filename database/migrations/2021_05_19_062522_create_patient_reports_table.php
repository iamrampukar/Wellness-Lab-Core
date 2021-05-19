<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_reports', function (Blueprint $table) {
            // $table->engine = "InnoDB";
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('lab_id',20);
            $table->string('sample_no',20);
            $table->string('patient_type',25);
            $table->dateTime('receiving_date');
            $table->dateTime('reporting_date');
            $table->string('test_report_status',25);
            $table->string('ref_consultant',25);
            $table->longText('laboratory_report');
            $table->tinyInteger('publish')->default(1);
            $table->tinyInteger('delete_flag')->default(1);
            $table->timestamps();
            $table->foreign('patient_id')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_reports');
    }
}
