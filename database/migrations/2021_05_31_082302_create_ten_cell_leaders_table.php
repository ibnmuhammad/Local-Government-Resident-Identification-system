<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenCellLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tencellleaders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phonenumber');
            $table->string('LocalGovtID');
            $table->timestamps();

            $table->foreign('LocalGovtID')->references('LocalGovtID')->on('lgdetails')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tencellleaders');
    }
}
