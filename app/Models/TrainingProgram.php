<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingProgram extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function coaches()
    {
        return $this->belongsTo(Coach::class);
    }
    public function exercices()
    {
        return $this->hasMany(Exercice::class);
    }
}
