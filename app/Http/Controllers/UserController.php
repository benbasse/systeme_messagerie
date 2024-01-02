<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json([
            'status_code' => 200,
            'status_message' => 'utilisateur ajouté avec succes',
            'status_body' => $user
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Reponse $reponse)
    {

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
