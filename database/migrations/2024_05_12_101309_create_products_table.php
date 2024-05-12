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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->text('picture');
            $table->text('description');
            $table->integer('quantity');
            
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('provider_id')->index();
            
            $table->foreign('category_id')->references('id')->on('categories')
                ->restrictOnDelete()
                ->restrictOnUpdate();

            $table->foreign('provider_id')->references('id')->on('providers')
                ->restrictOnDelete()
                ->restrictOnUpdate();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
