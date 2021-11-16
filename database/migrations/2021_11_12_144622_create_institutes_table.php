<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->string('inst_name');
            $table->string('address');
            $table->string('city');
            $table->bigInteger('phone');
            $table->bigInteger('mobile');
            $table->bigInteger('cell');
            $table->string('email');
            $table->string('membership');
            $table->string('logo');
            $table->string('owner_name');
            $table->string('designation');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutes');
    }
}
