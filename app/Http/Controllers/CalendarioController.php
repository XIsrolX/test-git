<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CalendarioController extends Controller
{
    
    public function index()
    {
        return view('calendario.index');
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        request()->validate(Calendario::$rules);
        $calendario = Calendario::create($request->all());
    }

    
    public function show(Calendario $calendario)
    {
        $calendario = Calendario::all();
        return response()->json($calendario);
    }

   
    public function edit($id)
    {
        $calendario = Calendario::find($id);
        $calendario->start = Carbon::createFromFormat('Y-m-d H:i:s', $calendario->start)->format('Y-m-d');
        $calendario->end = Carbon::createFromFormat('Y-m-d H:i:s', $calendario->end)->format('Y-m-d');
        return response()->json($calendario);
    
    }

   
    public function update(Request $request, Calendario $calendario)
    {
        request()->validate(Calendario::$rules);
        $calendario->update($request->all());
        return response()->json($calendario);

    }

  
    public function destroy($id)
    {
        $calendario = Calendario::find($id)->delete();
        return response()->json($calendario);
    }
}
