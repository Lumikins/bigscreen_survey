<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations, create surveys table
     */
    public function up(): void
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('survey', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
