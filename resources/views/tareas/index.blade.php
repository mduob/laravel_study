<!-- resources/views/tareas/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
    @vite('resources/css/app.css') {{-- importante para que cargue Tailwind --}}
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Tareas</h1>

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
</body>
</html>
