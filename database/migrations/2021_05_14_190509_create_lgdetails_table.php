<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLgdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lgdetails', function (Blueprint $table) {
            $table->string('LocalGovtID')->unique();
            $table->string('leader');
            $table->string('street');
            $table->string('phonenumber');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ManagedBy');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ManagedBy')->references('id')->on('districtsadmins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lgdetails');
    }
}
