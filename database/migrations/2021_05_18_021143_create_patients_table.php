<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 20);
            $table->string('middle_name', 20);
            $table->string('last_name', 20);
            $table->tinyInteger('gender')->default(0);
            $table->date('dob');
            $table->integer('age');
            $table->string('mobile1',20);
            $table->string('mobile2',20);
            $table->string('telephone',20);
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
