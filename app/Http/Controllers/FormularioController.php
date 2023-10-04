<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{ 
    public function index()
    {
        $datos = Formulario::paginate(5);
        dd($datos);
        return view('formulario.index', compact('datos'));
    }

   
    public function create()
    {
        return view('formulario.create');
    }


    public function store(Request $request)
    {
        $formulario = new Formulario();
        $formulario->nombre=$request->post('nombre');
        $formulario->apellidoP=$request->post('apellidoP');
        $formulario->apellidoM=$request->post('apellidoM');
        $formulario->fecha_nacimiento=$request->post('fecha_nacimiento');
        $formulario->save();

        return redirect()->route("formulario.index")->with("success", "Persona agregada con exito");
    }

   
    public function show($id)
    {
        $formulario = Formulario::find($id);

        return view('formulario.destroy', compact('formulario'));
    }
 

    public function edit($id)
    {
        $formulario = Formulario::find($id);

        return view('formulario.update', compact('formulario'));
    }


    public function update(Request $request, $id)
    {
        $formulario = Formulario::find($id);
        $formulario->nombre=$request->post('nombre');
        $formulario->apellidoP=$request->post('apellidoP');
        $formulario->apellidoM=$request->post('apellidoM');
        $formulario->fecha_nacimiento=$request->post('fecha_nacimiento');
        $formulario->save();

        return redirect()->route("formulario.index")->with("success", "Persona actualizada con exito");        
    }


    public function destroy($id)
    {
        $formulario = Formulario::find($id);
        $formulario->delete();
        return redirect()->route("formulario.index")->with("success", "Persona eliminada con exito");    
    }
}
