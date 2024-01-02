<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reponse = Reponse::all();
        return view("", compact("reponse"));
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
        $reponse = new Reponse();
        $reponse->id_module = $request->id_module;
        $reponse->contenue = $request->contenue;
        $reponse->save();
        return redirect()->route("")->with("success","reponse");
    }

    /**
     * Display the specified resource.
     */
    public function show(Reponse $reponse)
    {
        $reponse = Reponse::findOrFail($reponse->id_module);
        return view("", compact("reponse"));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reponse $reponse)
    {
        //
    }
}
