<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo',250);
            $table->date('fecha');
            $table->time('hora');
            $table->string('lugar',250)->nullable;
            $table->string('tipo',250)->nullable;//virtual, presencial... etc
            $table->string('link',250)->nullable;
            $table->string('cartel',250)->nullable; 
            $table->text('masinfo')->nullable; 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
