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
}