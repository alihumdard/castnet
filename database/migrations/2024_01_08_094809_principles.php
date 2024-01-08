<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('principles', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('heading')->nullable();
            $table->longText('principle')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('principles');
    }
};
