<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomobiliaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automobiliais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marke_id');
            $table->string('model');
            $table->smallInteger('year');
            $table->timestamps();

            $table->foreign('marke_id')
            ->references('id')
            ->on('markes')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('automobiliais');
    }
}
