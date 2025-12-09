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
        Schema::create('order_drink', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('drink_id');

            $table->foreign('drink_id')
                ->references('id')
                ->on('drink')
                ->onDelete('cascade');
            $table->string('name');
            $table->integer('amount');
            $table->integer('total_price');
            $table->enum('payment_mehtod', ['Dana', 'Gopay', 'ShopeePay', 'M-Banking']);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('order_drink');
    }
};
