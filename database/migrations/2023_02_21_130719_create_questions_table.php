<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations, create the questions table
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question', 255); // the question text
            $table->enum('question_type', ['A', 'B', 'C']); // the question types - A multiple, B open text, C 1-5
            $table->string('answer_choice', 255)->nullable(); // answer field according to type
            $table->bigInteger('survey_id')->nullable()->unsigned(); // see fk comment bellow
            $table->timestamps();

            // foreign key to point to the surveys table
            $table->foreign('survey_id')->references('id')->on('surveys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
