<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chat_tournament', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->foreignId('direct_chat_id')->constrained('direct_chat')->onDelete('cascade');
            // $table->foreignId('tournament_id')->constrained('tournaments')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chat_tournament');
    }
};

