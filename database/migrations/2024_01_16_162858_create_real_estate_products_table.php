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
        Schema::create('real_estate_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->string('province');
            $table->integer('stock'); 
            $table->integer('bathrooms');
            $table->string('property_type');
            $table->boolean('garage');
            $table->integer('property_size');
            $table->integer('garage_size')->nullable();
            $table->integer('bedrooms');
            $table->integer('year_built');
            $table->string('seller_type');
            $table->string('condition');
            $table->string('purpose');
            $table->integer('land_area');
            $table->text('property_features');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->text('images');
            $table->string('video')->nullable();        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('real_estate_products');
    }
};
