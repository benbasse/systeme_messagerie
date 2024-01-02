<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::all();
        return view("", compact("modules"));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "titre" => "titre",
        ]) ;
        $module = new Module();
        $module->titre = $request->validate->titre;
        $module->save();
        return redirect()->route("")->with("success","");
    }

    public function delete(Module $module)
    {
        $module->delete();
        return redirect()->route("")->with("success","");
    }
}
