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
        Schema::disableForeignKeyConstraints();

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->dateTime('payment_date');
            $table->integer('payment_amount');
            $table->text('payment_method')->nullable();
            $table->integer('transaction_id');
            $table->text('payment_status');
            $table->integer('invoice_id');
            $table->longText('payment_description');
            $table->integer('billing_address');
            $table->text('cardholder_name:');
            $table->text('expiration_date');
            $table->text('currency');
            $table->timestamps();

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
