<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // table data for applicants

        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');

            // Student_Details ***

            $table->string('fullname', 30);
            $table->string('email', 50)->nullable();
            $table->string('gender', 50);
            $table->string('mobile', 13);
            $table->string('address', 100);
            $table->string('branch', 25);
            $table->Integer('matric_year');
            $table->string('matric_interest', 25);

            // Subject_Selection_Choice ***

            $table->string('groupOne', 100)->nullable();
            $table->string('groupTwo', 100)->nullable();
            $table->string('groupThree', 100)->nullable();

            // Parent_Details ***

            $table->string('parent_name', 50);
            $table->string('relation', 30);
            $table->string('occupation', 50);
            $table->string('employer_name', 50);
            $table->string('parent_mobile', 13);
            $table->string('parent_address', 30);

            // Uploads_Attached ***

            $table->string('scannedidpassport', 50);
            $table->string('childbirth_cert', 50);

            // Fixed_Values

            $table->string('TsAndCs')->default('YES');
            $table->string('payment')->default('Pending');
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
        //
    }
}
