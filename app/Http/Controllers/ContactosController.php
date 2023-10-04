<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Contactos;
use App\Models\ContactosListado;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
   
    public function index()
    {
        $listado = ContactosListado::all();
        return view('contactos.index', compact('listado'));
    }

   
    public function create()
    {
        $categorias = Categorias::all();
        return view('contactos.agregar', compact('categorias'));
    }

   
    public function store(Request $request)
    {
        $contacto = new Contactos();
        $contacto->id_categoria = $request->post('categoria');
        $contacto->nombre = $request->post('nombre');
        $contacto->apellidoP = $request->post('apellidoP');
        $contacto->apellidoM = $request->post('apellidoM');
        $contacto->telefono = $request->post('telefono');
        $contacto->email = $request->post('email');
        $contacto->save();

        return redirect()->route('contactos.index')->with('succes', 'Agregado con exito');
    }

   
    public function show($id)
    {
        $contacto = ContactosListado::find($id);
        return view('contactos.eliminar', compact('contacto'));
    }

    
    public function edit($id)
    {
        $contacto = Contactos::find($id);
        $categorias = Categorias::all();
        return view('contactos.editar', compact('contacto', 'categorias'));
    }

   
    public function update(Request $request, $id)
    {
        $contacto = Contactos::find($id);
        $contacto->id_categoria = $request->post('categoria');
        $contacto->nombre = $request->post('nombre');
        $contacto->apellidoP = $request->post('apellidoP');
        $contacto->apellidoM = $request->post('apellidoM');
        $contacto->telefono = $request->post('telefono');
        $contacto->email = $request->post('email');
        $contacto->save();

        return redirect()->route('contactos.index')->with('succes', 'Actualizado con exito');
    }

   
    public function destroy($id)
    {
        $contactos = Contactos::find($id);
        $contactos->delete();

        return redirect()->route('contactos.index')->with('success', 'Eliminado con exito');
    }
}
