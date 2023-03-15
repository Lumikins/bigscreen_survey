<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations, create answers table
     */
    public function up(): void
    {
        Schema::create('user_answers', function (Blueprint $table) {
            $table->id();
            $table->string('user_answer', 255);
            $table->bigInteger('question_id')->nullable()->unsigned();
            $table->bigInteger('polled_user_id')->nullable()->unsigned();
            $table->timestamps();

            // create fk with the questions table
            $table->foreign('question_id')->references('id')->on('questions');
            // create fk with the polled user table
            $table->foreign('polled_user_id')->references('id')->on('polled_users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
