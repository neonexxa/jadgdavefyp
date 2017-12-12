<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('appname');
            $table->timestamp('intdate')->nullable();
            $table->string('joi');
            $table->string('dept');
            $table->string('interviewer');
            $table->string('inttype');
            $table->integer('radiostech')->default(0);
            $table->integer('edutrain')->default(0);
            $table->integer('workexp')->default(0);
            $table->integer('orgskill')->default(0);
            $table->integer('training')->default(0);
            $table->integer('comm')->default(0);
            $table->integer('overallrate')->default(0);
            $table->integer('finalrec')->default(0);

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
        Schema::dropIfExists('applicants');
    }
}
