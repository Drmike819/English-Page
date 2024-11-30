<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected $fillable=['title', 'description', 'audio', 'topic_id'];


    public function subtopic(){
        return $this->belongsTo(Topic::class);
    }
}
