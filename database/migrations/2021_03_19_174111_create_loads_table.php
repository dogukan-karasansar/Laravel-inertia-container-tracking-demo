<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agencies');
            $table->enum('type', ['20 Standard DRY VAN', '40 Standard DRY VAN', '40 High Cube DR', '20 Open Top', '40 Open Top', 'Reefer High Cube']);
            $table->date('release_date');
            $table->date('arrival_date');
            $table->text('arrival_port');
            $table->timestamps();
            $table->foreign('agencies')->references('id')->on('agencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loads');
    }
}
