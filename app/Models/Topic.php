<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subtopic;
use App\Models\Vocabulary;

class Topic extends Model
{
    protected $fillable =['images', 'title', 'description'];

    public function subtopics(){
        return $this->hasMany(Subtopic::class);
    }

    public function vocabulary(){
        return $this->hasMany(Vocabulary::class);
    }
    
}
