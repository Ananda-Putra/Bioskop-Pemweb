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
        Schema::create('order', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('film_id');

            $table->foreign('film_id')
                ->references('id')
                ->on('film')
                ->onDelete('cascade');
            $table->string('title');
            $table->integer('amount');
            $table->integer('total_price');
            $table->enum('payment_mehtod', ['Dana', 'Gopay', 'ShopeePay', 'M-Banking']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
