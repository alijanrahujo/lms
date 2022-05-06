<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_name');
            $table->string('education');
            $table->string('gender');
            $table->string('dob');
            $table->string('address');
            $table->string('email')->nullable();
            $table->bigInteger('mobile');
            $table->string('pic')->nullable();
            $table->string('emp_id')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
