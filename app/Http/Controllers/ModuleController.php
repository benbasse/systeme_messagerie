<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::all();

        return response()->json([
            'status_code' => 200,
            'status_message' => 'Modules récupérés avec succès',
            'status_body' => $modules
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "titre" => "required",
        ]) ;
        $module = new Module();
        $module->titre = $request->titre;
        $module->save();
        return response()->json([
            'status_code' => 200,
            'status_message' => 'Module récupéré avec succès',
            'status_body' => $module
        ]);

    }

    public function show(Module $module)
    {
        return response()->json([
            'status_code' => 200,
            'status_message' => 'Module récupéré avec succès',
            'status_body' => $module
        ]);
    }

    public function update(Request $request, Module $module)
    {
        $request->validate([
            'titre' => 'required',
        ]);

        $module->update([
            'titre' => $request->titre,
        ]);

        return response()->json([
            'status_code' => 200,
            'status_message' => 'Module mis à jour avec succès',
            'status_body' => $module
        ]);
    }

    public function delete(Module $module)
    {
        $module->delete();
        return redirect()->route("")->with("success","");
    }
}
