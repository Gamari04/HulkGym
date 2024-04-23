<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Exercice extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    public function training_program()
    {
        return $this->belongsTo(TrainingProgram::class);
    }
    protected $fillable = [
        'title',
        'duration',
        'Required_Equipment',
        'Difficulty_Level',
        'Targeted_Muscle_Groups',
        'Instructions',
        'Number_Sets_Repetitions',
        'training_program_id',
    ]; 
}
