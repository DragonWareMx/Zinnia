<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('foto',250);
            $table->string('nombre',250);
            $table->string('rol',250);
            $table->string('fb',100)->nullable();
            $table->string('insta',100)->nullable();
            $table->string('tw',100)->nullable();
            $table->string('cv',100);//url del curriculum en pdf
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
