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
        Schema::create('meta_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('package_id')->references('id')->on('packages')->onDelete('cascade');
            $table->string('transaction_id')->unique();
            $table->string('wallet_address');
            $table->decimal('amount',20,4);
            $table->enum('status',['pending','rejected','success'])->default('pending');
            $table->text('curl_response')->nullable();
            $table->text('error_response')->nullable();
            $table->tinyInteger('checkout')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta_transactions');
    }
};
