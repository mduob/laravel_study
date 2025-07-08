<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    //mostrar todas las tareas y el formulario para crear una nueva tarea
    public function index()
    {
        $tareas = Tarea::all();
        return view('tareas.index', compact('tareas')); 
}
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:1000',
        ]);

        // Crear una nueva tarea
        Tarea::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        ]);

        // Redirigir a la lista de tareas con un mensaje de éxito
        return redirect()->route('tareas.index')->with('success', 'Tarea creada exitosamente.');
    }
}