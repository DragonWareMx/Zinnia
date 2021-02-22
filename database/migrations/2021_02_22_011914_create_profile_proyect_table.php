<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileProyectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_proyect', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('profile_id',)->references('id')->on('profiles')->onDelete('cascade');
            $table->foreignId('proyect_id',)->references('id')->on('proyects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_proyect');
    }
}
