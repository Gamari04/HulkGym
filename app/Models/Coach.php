<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $fillable = [
        'speciality',
        'biography',
        'user_id',
        'request_status',
    ]; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function training_programs()
    {
        return $this->hasMany(TrainingProgram::class);
    }
}
