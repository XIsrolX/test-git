<?php

namespace App\Http\Controllers;
 
use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{

    public function index()
    {
        $categorias = Categorias::all();

        return view('categorias.index', compact('categorias'));
    }


    public function create()
    {
        return view('categorias.agregar');
    }


    public function store(Request $request)
    {
        $categoria = new Categorias();
        $categoria->nombre = $request->post('nombre');
        $categoria->descripcion = $request->post('descripcion');
        $categoria->save();

        return redirect()->route('categorias.index')->with('success', 'Agregado con exito');

    }


    public function show($id)
    {
        $categorias = Categorias::find($id);
        return view('categorias.eliminar', compact('categorias'));
    }


    public function edit($id)
    {

        $categorias = Categorias::find($id);

        return view('categorias.editar', compact('categorias'));
    }


    public function update(Request $request, $id)
    {
        $categorias = Categorias::find($id);
        $categorias->nombre = $request->post('nombre');
        $categorias->descripcion = $request->post('descripcion');
        $categorias->save();

        return redirect()->route('categorias.index')->with('success', 'Actializado con exito');

    }


    public function destroy($id)
    {
        $categorias = Categorias::find($id);
        $categorias->delete();

        return redirect()->route('categorias.index')->with('success', 'Eliminado con exito');
    }
}
