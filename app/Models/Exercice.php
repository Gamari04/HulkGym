<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercice extends Model
{
    use HasFactory;
    public function training_program()
    {
        return $this->belongsTo(TrainingProgram::class);
    }
}
