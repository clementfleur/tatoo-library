<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTags extends Migration
{
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id('tag_id');
            $table->string('nom')->unique();
            $table->string('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
