<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subject_answers', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('subject_id');
            // $table->unsignedBigInteger('user_id');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subject_answers');
    }
};

