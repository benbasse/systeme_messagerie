<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $reponses = Reponse::where('id_questions',$id);

        return response()->json([
            'status_code' => 200,
            'status_message' => 'Réponses récupérées avec succès',
            'status_body' => $reponses
        ]);
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
        $request->validate([
            'id_questions' => 'required|integer',
            'contenue' => 'required',
        ]);

        $reponse = new Reponse();
        $reponse->id_questions = $request->id_questions;
        $reponse->contenue = $request->contenue;
        $reponse->save();

        return response()->json([
            'status_code' => 201,
            'status_message' => 'Réponse ajoutée avec succès',
            'status_body' => $reponse
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Reponse $reponse)
    {
        return response()->json([
            'status_code' => 200,
            'status_message' => 'Réponse récupérée avec succès',
            'status_body' => $reponse
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reponse $reponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reponse $reponse)
    {
        $request->validate([
            'id_questions' => 'required|integer',
            'contenue' => 'required',
        ]);

        $reponse->update([
            'id_questions' => $request->id_questions,
            'contenue' => $request->contenue,
        ]);

        return response()->json([
            'status_code' => 200,
            'status_message' => 'Réponse mise à jour avec succès',
            'status_body' => $reponse
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reponse $reponse)
    {
        $reponse->delete();

        return response()->json([
            'status_code' => 200,
            'status_message' => 'Réponse supprimée avec succès',
            'status_body' => null
        ]);
    }
}
