<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pages_banners', function (Blueprint $table) {
            $table->id();
            $table->string('pagename')->nullable();
            $table->string('image_path')->nullable();
            $table->integer('type')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('pages_banners');
    }
};
