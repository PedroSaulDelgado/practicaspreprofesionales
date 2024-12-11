<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practicas;
class PracticasController extends Controller
{
    public function index (){
        $practicas = Practicas::orderBy('id', 'desc')->paginate();
        // $practicas = Practicas::all();
        
        return view('practicas.index', compact('practicas'));
    }
    public function create (){        
        return view('practicas.create');
    }
    public function show ($id){        
        $practica = Practicas::find($id);
        return view('practicas.show',compact('practica'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'codigo' => 'required|integer',
            'idestudiante' => 'required|integer',
            'iddocente' => 'required|integer',
            'idempresa' => 'required|integer',
            'idetapa' => 'required|integer',
            'titulo' => 'required|string|max:255',
        ]);
       
        $practica = Practicas::create($request->all());
        return redirect()->route('practicas.show',$practica);
    }

    public function edit (Practicas $practica){        
        return view('practicas.edit',compact('practica'));
    }

    public function update(Request $request, Practicas $practica)
    {

        $validatedData = $request->validate([
            'codigo' => 'required|integer',
            'idestudiante' => 'required|integer',
            'iddocente' => 'required|integer',
            'idempresa' => 'required|integer',
            'idetapa' => 'required|integer',
            'titulo' => 'required|string|max:255',
        ]);
       
        $practica->update($validatedData);
        return redirect()->route('practicas.show',$practica);
    }

    public function destroy (Practicas $practica){   
        $practica -> delete();     
        return redirect()->route('practicas.index');
    }
}

