<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('image');
            $table->mediumText('logo')->nullable(); // Add ->nullable()
            $table->mediumText('description');
            $table->string('price');
            $table->string('stock_quantity');
            $table->string('size');      
            $table->rememberToken();
            $table->timestamps();

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
};
