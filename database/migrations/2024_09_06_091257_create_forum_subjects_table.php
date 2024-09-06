<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('forum_subjects', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->text('content');
            $table->timestamps();
            // $table->unsignedBigInteger('forum_id');
       
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('forum_subjects');
    }
};

