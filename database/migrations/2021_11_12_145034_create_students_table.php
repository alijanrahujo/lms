<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('father_name');
            $table->string('garien_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('dob');
            $table->string('gender');
            $table->bigInteger('mobile')->nullable();
            $table->integer('scl_class_id');
            $table->integer('section_id');
            $table->string('pic')->nullable();
            $table->string('roll_nbr')->nullable();
            $table->string('monthly_fee')->nullable();
            $table->string('status');
            $table->bigInteger('scl_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
