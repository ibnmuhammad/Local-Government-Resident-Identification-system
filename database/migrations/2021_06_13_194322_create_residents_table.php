<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->string('resid')->unique();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('phonenumber');
            $table->string('gender');
            $table->string('marital');
            $table->string('work');
            $table->string('pic');
            $table->string('LocalGovtID');
            $table->unsignedBigInteger('HouseID');
            $table->unsignedBigInteger('baloziID');
            $table->timestamps();

            $table->foreign('LocalGovtID')->references('LocalGovtID')->on('lgdetails')->onDelete('cascade');
            $table->foreign('HouseID')->references('id')->on('houses')->onDelete('cascade');
            $table->foreign('baloziID')->references('id')->on('tencellleaders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residents');
    }
}
