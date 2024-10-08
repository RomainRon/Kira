<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('register_tournament', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_date')->nullable();
            $table->timestamps();
            // $table->foreignId('tournament_id')->constrained('tournaments')->onDelete('cascade');
            // $table->foreignId('team_id')->constrained('teams')->onDelete('cascade');
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('register_tournament');
    }
};

