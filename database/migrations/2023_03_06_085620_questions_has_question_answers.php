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
        Schema::create('question_question_answer', function (Blueprint $table) {
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('question_answer_id');

            // create fk with the questions table
            $table->foreign('question_id')->references('id')->on('questions');

            // create fk with the question answers table
            $table->foreign('question_answer_id')->references('id')->on('question_answers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
