<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homesection2s', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('heading')->nullable();
            $table->string('description')->nullable();
            $table->string('button')->nullable();
            $table->text('buttonlink')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homesection2s');
    }
};
