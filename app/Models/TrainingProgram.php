<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class TrainingProgram extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
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
