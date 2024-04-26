<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'type_id',
        'user_id',
    ];
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function users()
    {
        return $this->belongsToMany('users');
    }
}
