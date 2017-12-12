<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('nin')->unique();
            $table->string('oin')->unique();
            $table->string('epfnum');
            $table->string('itn');
            $table->string('itnnum');
            $table->string('bank');
            $table->string('accref');
            $table->string('accnum');
            $table->string('spfullname');
            $table->string('spnin')->unique();
            $table->string('spoin')->unique();
            $table->timestamp('spdob')->nullable();
            $table->string('spnationality');
            $table->string('sppn');
            $table->string('spisworking');
            $table->string('spoccupation');
            $table->string('spcompany');
            $table->string('sppostcode');
            $table->string('spotn');
            $table->string('sphn');
            $table->timestamp('spmd')->nullable();
            $table->string('child');
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
        Schema::dropIfExists('employees');
    }
}
