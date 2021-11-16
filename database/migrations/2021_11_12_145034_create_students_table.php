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
            $table->string('garien_name');
            $table->string('mother_name');
            $table->string('dob');
            $table->string('class_name');
            $table->string('section');
            $table->bigInteger('mobile');
            $table->string('pic');
            $table->string('roll_nbr');
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
