<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('containers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ship');
            $table->unsignedBigInteger('load');
            $table->text('departure');
            $table->text('arrival');
            $table->timestamps();
            $table->foreign('ship')->references('id')->on('ships');
            $table->foreign('load')->references('id')->on('loads')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('containers');
    }
}
