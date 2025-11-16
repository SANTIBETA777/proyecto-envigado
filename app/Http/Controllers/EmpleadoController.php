<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::orderBy('id', 'desc')->get();
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre'   => 'required|string|max:255',
            'apellido' => 'nullable|string|max:255',
            'email'    => 'required|email|max:255|unique:empleados,email',
            'cargo'    => 'nullable|string|max:255',
            'salario'  => 'nullable|numeric',
        ]);

        Empleado::create($data);

        return redirect()->route('empleados.index')->with('success', 'Empleado creado correctamente.');
    }

    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    public function update(Request $request, Empleado $empleado)
    {
        $data = $request->validate([
            'nombre'   => 'required|string|max:255',
            'apellido' => 'nullable|string|max:255',
            'email'    => 'required|email|max:255|unique:empleados,email,' . $empleado->id,
            'cargo'    => 'nullable|string|max:255',
            'salario'  => 'nullable|numeric',
        ]);

        $empleado->update($data);

        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado correctamente.');
    }

    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado.');
    }
}
