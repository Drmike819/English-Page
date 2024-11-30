<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subtopic extends Model
{
    protected $fillable=['title', 'description', 'image', 'topics_id'];

    
    public function topics(){
        return $this->belongsTo(Topics::class);
    }


    public function vocabulary(){
        return $this->hasMany(Vocabulary::class);
    }

    use HasFactory;

    public function notes()
    {
        return $this->hasMany(Note::class);  // Relación de un subtema a muchos apuntes
    }
}
