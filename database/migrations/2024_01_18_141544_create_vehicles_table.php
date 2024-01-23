<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->string('province');
            $table->integer('stock'); 
            $table->string('seller_type');
            $table->string('registered_city');
            $table->decimal('engine_capacity', 8, 2);
            $table->string('body_type');
            $table->string('condition');
            $table->integer('model_year');
            $table->string('exterior_color');
            $table->text('car_features');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('phone');
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('video')->nullable();          
            $table->json('images');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
