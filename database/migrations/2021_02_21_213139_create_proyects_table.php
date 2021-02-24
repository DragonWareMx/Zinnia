<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo', 250);
            $table->string('titulo2', 250);
            $table->string('titulo3', 250);
            $table->text('descripcion');    
            $table->string('subtitulo');
            $table->text('creditos');       //info importante      
            $table->text('masinfo');        //datos técnicos
            $table->string('pdf', 250);     // url pdf descargable 
            $table->text('txtTitulo2')->nullable();
            $table->text('txtTitulo3')->nullable();
            $table->text('quote')->nullable(); //frase representativa
            $table->enum('estado',['vigente','concluído']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyects');
    }
}
