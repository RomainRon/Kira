<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('team_id')->nullable()->constrained('teams')->onDelete('cascade');

        });
        Schema::table('forums', function (Blueprint $table) {
             $table->foreignId('subject_id')->constrained('forum_subjects')->onDelete('cascade');

        });
        Schema::table('forum_subjects', function (Blueprint $table) {
            $table->foreignId('forum_id')->constrained('forums')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

       });
       Schema::table('subject_answers', function (Blueprint $table) {
            $table->foreignId('subject_id')->constrained('forum_subjects')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

   });
        Schema::table('direct_chat', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('tournament_id')->constrained('tournaments')->onDelete('cascade');

});  
        Schema::table('register_tournament', function (Blueprint $table) {
             $table->foreignId('tournament_id')->constrained('tournaments')->onDelete('cascade');
             $table->foreignId('team_id')->constrained('teams')->onDelete('cascade');
             $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

});
        Schema::table('users_teams', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('team_id')->constrained('teams')->onDelete('cascade');

});
        Schema::table('chat_tournament', function (Blueprint $table) {
            $table->foreignId('direct_chat_id')->constrained('direct_chat')->onDelete('cascade');
            $table->foreignId('tournament_id')->constrained('tournaments')->onDelete('cascade');

});
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['team_id']);
        });
        Schema::table('forums', function (Blueprint $table) {
            $table->dropForeign(['subject_id']);
        });
        Schema::table('forum_subjects', function (Blueprint $table) {
            $table->dropForeign(['forum_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::table('subject_answers', function (Blueprint $table) {
            $table->dropForeign(['subject_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::table('direct_chat', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['tournament_id']);
        });
        Schema::table('register_tournament', function (Blueprint $table) {
            $table->dropForeign(['tournament_id']);
            $table->dropForeign(['team_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::table('users_teams', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['team_id']);
        });
        Schema::table('chat_tournament', function (Blueprint $table) {
            $table->dropForeign(['direct_chat_id']);
            $table->dropForeign(['tournament_id']);
        });
    }    
};
