<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('HouseNumber');
            $table->string('owner');
            $table->string('phonenumber');
            $table->unsignedBigInteger('baloziID');
            $table->string('balozi');
            $table->string('LocalGovtID');
            $table->string('status');
            // $table->string('adminID');
            $table->timestamps();

            $table->foreign('baloziID')->references('id')->on('tencellleaders')->onDelete('cascade');
            $table->foreign('LocalGovtID')->references('LocalGovtID')->on('lgdetails')->onDelete('cascade');
            // $table->foreign('adminID')->references('user_id')->on('districtsadmins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
