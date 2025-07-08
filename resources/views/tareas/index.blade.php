<!-- resources/views/tareas/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
    @vite('resources/css/app.css') {{-- importante para que cargue Tailwind --}}
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="flex flex-col md:flex-row justify-center items-start md:space-x-8 mt-10">
        <div class="mb-4 max-w-lg w-full mx-auto p-6 bg-white shadow-md rounded-lg mb-8 md:mb-0">
            <h2 class="text-xl font-bold mb-4">Ingresar nueva tarea</h2>
            <form action="{{ route('tareas.store') }}" method="post">
                @csrf
                <label for="titulo" class="block font-semibold mb-1">Título</label>
                <input type="text" id="titulo" name="titulo" placeholder="Título de la tarea" class="p-2 border rounded w-full mb-2">
                <label for="descripcion" class="block font-semibold mb-1">Descripción</label>
                <input type="text" id="descripcion" name="descripcion" placeholder="Descripción (opcional)" class="p-2 border rounded w-full mb-2">
                <input type="submit" value="Agregar Tarea" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded shadow transition duration-200 mt-2">
            </form>
        </div>
        <div class="max-w-md w-full mx-auto p-6 bg-white shadow-md rounded-lg mb-8 md:mb-0">
            <h1 class="text-xl font-bold mb-4">Tareas</h1>
            @if ($tareas->isEmpty())
                <p class="text-gray-500">No hay tareas registradas.</p>
            @else
                <ul class="space-y-3">
                    @foreach ($tareas as $tarea)
                        <li class="p-4 bg-gray-100 rounded shadow">
                            <div class="font-semibold">{{ $tarea->titulo }}</div>
                            @if ($tarea->descripcion)
                                <div class="text-sm text-gray-600">{{ $tarea->descripcion }}</div>
                            @endif
                            <div class="text-xs text-gray-400 mt-1">Creada el {{ $tarea->created_at->format('d/m/Y H:i') }}</div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
</body>
</html>
