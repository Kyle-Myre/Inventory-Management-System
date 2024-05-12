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
        Schema::create('transactions_orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('order_id');

            $table->foreign('transaction_id')
                ->references('id')
                ->on('transactions')
                ->restrictOnDelete()
                ->restrictOnUpdate();

            $table->foreign('order_id')
            ->references('id')
            ->on('orders')
            ->restrictOnDelete()
            ->restrictOnUpdate();

            $table->unique(['transaction_id' , 'order_id']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions_orders');
    }
};
