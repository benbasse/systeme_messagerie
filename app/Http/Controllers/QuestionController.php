<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }


    // Les methodes que j'ai ajoute dont on a le model module
    public function showModuleQuestions($moduleId)
    {
        // Récupérer les questions du module
        $module = Module::with('questions')->find($moduleId);
        $questions = $module->questions;

        // Passer les données à la vue
        return view('questions.showModuleQuestions', compact('module', 'questions'));
    }

    public function showQuestionAndAnswers($questionId)
    {
        // Récupérer la question avec les réponses associées
        $question = Question::with('reponses')->find($questionId);

        // Passer les données à la vue
        return view('messages.show', compact('questions'));
    }

    public function getAnswers($questionId)
    {
        // Récupérer les réponses de la question spécifiée
        $question = Question::with('reponses')->find($questionId);

        // Retourner les réponses en format JSON
        return response()->json(['reponses' => $question->reponses]);
    }
}
