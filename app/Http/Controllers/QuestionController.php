<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index($id)
    {
        $questions = Question::where('id_module', $id);

        return response()->json([
            'status_code' => 200,
            'status_message' => 'Questions récupérées avec succès',
            'status_body' => $questions
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $questions = new Question();
        $questions->id_module = $request->id_module;
        $questions->contenue = $request->contenue;

        $questions->save();
        return response()->json([
            'status_code' => 200,
            'status_message' => 'Question ajouté avec succes',
            'status_body' => $questions
        ]);

    }

    public function show(Question $question)
    {
        return response()->json([
            'status_code' => 200,
            'status_message' => 'Question récupérée avec succès',
            'status_body' => $question
        ]);
    }

    public function edit(Question $question)
    {
        return response()->json([
            'status_code' => 200,
            'status_message' => 'Modification de la question',
            'status_body' => $question
        ]);
    }

    public function update(Request $request, Question $question)
    {
        $question->update([
            'id_module' => $request->id_module,
            'contenue' => $request->contenue,
        ]);

        return response()->json([
            'status_code' => 200,
            'status_message' => 'Question mise à jour avec succès',
            'status_body' => $question
        ]);
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return response()->json([
            'status_code' => 200,
            'status_message' => 'Question supprimée avec succès',
            'status_body' => null
        ]);
    }

}
