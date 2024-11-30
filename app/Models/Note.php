<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'subtopic_id'];  // Asegúrate de que 'subtopic_id' exista en la tabla notes

    // Relación inversa: un apunte pertenece a un subtema
    public function subtopic()
    {
        return $this->belongsTo(Subtopic::class, 'subtopic_id');  // 'subtopic_id' es la clave foránea
    }
}
