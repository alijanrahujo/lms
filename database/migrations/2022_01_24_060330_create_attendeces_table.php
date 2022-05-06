<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendeces', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('date');
            $table->string('day');
            $table->string('time_in');
            $table->string('time_out');
            $table->string('late_arrival')->nullable();
            $table->string('early_left')->nullable();
            $table->string('shift');
            $table->string('remarks')->nullable();
            $table->string('scl_id');
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendeces');
    }
}
