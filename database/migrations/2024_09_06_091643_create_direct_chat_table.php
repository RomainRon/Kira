<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('direct_chat', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->timestamp('date')->nullable();
            $table->timestamps();
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // $table->foreignId('tournament_id')->constrained('tournaments')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('direct_chat');
    }
};

