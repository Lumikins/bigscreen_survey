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
            $table->string('body', 255);
            $table->bigInteger('survey_id')->nullable()->unsigned(); // see fk comment bellow
            $table->bigInteger('type_id')->nullable()->unsigned(); // see fk comment bellow
            $table->timestamps();

            // foreign key to point to the surveys table
            $table->foreign('survey_id')->references('id')->on('surveys')->onDelete('cascade');

            // foreign key to point to the types table
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
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
