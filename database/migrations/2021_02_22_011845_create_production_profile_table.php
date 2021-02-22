<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_profile', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('production_id',)->references('id')->on('productions')->onDelete('cascade');
            $table->foreignId('profile_id',)->references('id')->on('profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('production_profile');
    }
}
