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
        Schema::create('users', function (Blueprint $table) {
           $table->id();
           $table->string('register_id',12)->unique();
           $table->string('wallet_address')->unique();
           $table->unsignedBigInteger('parent_id');
           $table->text('level_str')->nullable();
           $table->decimal('total_packages',20,4)->default(0)->comment('$');
           $table->decimal('total_token',20,4)->default(0)->comment('token');
           $table->integer('rank_id')->default(0);
           $table->decimal('direct_per',5,2)->default(5);
           $table->boolean('is_activate')->default(0);
           $table->boolean('status')->default(1);
           $table->timestamps();
           $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
