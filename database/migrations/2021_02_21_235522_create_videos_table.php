<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('link',100);
            $table->text('descripcion');
            $table->unsignedBigInteger('production_id')->nullable();
            $table->unsignedBigInteger('proyect_id')->nullable();
            $table->unsignedBigInteger('event_id')->nullable();
            
            
            $table->foreign('production_id')->references('id')->on('productions')->onDelete('cascade');
            $table->foreign('proyect_id')->references('id')->on('proyects')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
