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
        Schema::create('exercices', function (Blueprint $table) {
            $table->id();
            $table->time('duration');
            $table->string('title');
            $table->string('Required_Equipment');
            $table->enum('Difficulty_Level',['Beginner',' Intermediate', 'Advanced'])->nullable();
            $table->string('Targeted_Muscle_Groups');
            $table->string('Instructions');
            $table->integer('Number_Sets_Repetitions');
            $table->unsignedBigInteger('training_program_id');
            $table->foreign('training_program_id')->references('id')->on('training_programs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercices');
    }
};
