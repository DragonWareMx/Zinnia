<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('link',100);
            $table->text('descripcion');
            $table->unsignedBigInteger('production_id');
            $table->unsignedBigInteger('proyect_id');
            $table->unsignedBigInteger('event_id');
            $table->foreign('production_id')->references('id')->on('productions')->onDelete('cascade')->nullable();
            $table->foreign('proyect_id')->references('id')->on('proyects')->onDelete('cascade')->nullable();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
