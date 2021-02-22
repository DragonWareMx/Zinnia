<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo', 250);
            $table->text('descripcion');    //cuerpo, donde viene duración, dirección, reparto y demás datos que consideren importantes
            $table->text('sinopsis');       //resumen de la obra
            $table->text('masinfo');        //datos técnicos
            $table->string('pdf', 250);     // url pdf descargable 
            $table->text('reconocimientos')->nullable();
            $table->date('fecha');
            $table->text('criticas')->nullable();
            $table->text('quote')->nullable(); //crítica más representativa
            $table->enum('tipo',['producción','coproducción']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productions');
    }
}
