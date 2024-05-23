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
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('transaction_id')->unique();
            $table->string('wallet_address');
            $table->decimal('amount',20,4);
            $table->decimal('token',20,4);
            $table->decimal('fees',20,4);
            $table->foreignId('trans_id')->nullable()->references('id')->on('transactions')->onDelete('cascade');
            $table->enum('status',['pending','success','rejected'])->default('pending');
            $table->text('curl_response')->nullable();
            $table->text('error_response')->nullable();
            $table->integer('checkout')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawals');
    }
};
