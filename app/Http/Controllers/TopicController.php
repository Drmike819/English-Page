<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Topic; // Asegúrate de importar el modelo Topic
use App\Models\Subtopic; // Asegúrate de importar el modelo Subtopic
use App\Models\Note; // Asegúrate de importar el modelo Note

class TopicController extends Controller
{
    public function subtopicsandmore($id){
        // Obtén el topic
        $topic = Topic::findOrFail($id);

        // Obtén los subtopics relacionados con este topic
        $subtopics = $topic->subtopics; // Relación definida en el modelo Topic

        // Opcionalmente, puedes obtener las notes para cada subtopic
        $subtopicsWithNotes = $subtopics->map(function ($subtopic) {
            $subtopic->notes = $subtopic->notes; // Relación definida en el modelo Subtopic
            return $subtopic;
        });

        // Pasa los subtopics y las notes a la vista
        return view('pages.subtopics', compact('topic', 'subtopicsWithNotes'));
    }


    public function vocabulary($id)
    {
        $topic = Topic::findOrFail($id);  // Asegúrate de que este ID existe
        $vocabulary = $topic->vocabulary; // Obtiene los vocabularios relacionados con este Topic
        
        // Verifica si hay vocabularios para este Topic
        if ($vocabulary->isEmpty()) {
            // Si no hay vocabulario, pasamos una variable vacía o null
            $vocabulary = null; 
            return view('pages.vocabulary', compact('topic', 'vocabulary'))->with('message', 'No se encontraron vocabularios');
        }

        return view('pages.vocabulary', compact('topic', 'vocabulary'));
    }
}
