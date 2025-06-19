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
        Schema::create('bot_traders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->integer('win')->default(0);
            $table->integer('loss')->default(0);
            $table->float('rate')->default(0);
            $table->decimal('min_amount', 16, 2)->default(0);
            $table->decimal('max_amount', 16, 2)->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('duration')->nullable(); // in days
            $table->json('settings')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bot_traders');
    }
};
