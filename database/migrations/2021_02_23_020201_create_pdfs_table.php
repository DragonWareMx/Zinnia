<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdfs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('url',100);
            $table->text('descripcion');
            $table->unsignedBigInteger('production_id')->nullable();
            $table->unsignedBigInteger('proyect_id')->nullable();
            $table->foreign('production_id')->references('id')->on('productions')->onDelete('cascade');
            $table->foreign('proyect_id')->references('id')->on('proyects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pdfs');
    }
}
