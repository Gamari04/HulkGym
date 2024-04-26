<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class TrainingProgram extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'coach_id',
        'status',
       
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
    public function exercices()
    {
        return $this->hasMany(Exercice::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
