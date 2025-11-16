<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy('id', 'desc')->get();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre'    => 'required|string|max:255',
            'email'     => 'required|email|max:255|unique:clientes,email',
            'telefono'  => 'nullable|string|max:50',
            'direccion' => 'nullable|string|max:255',
        ]);

        Cliente::create($data);

        return redirect()->route('clientes.index')->with('success', 'Cliente creado correctamente.');
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $data = $request->validate([
            'nombre'    => 'required|string|max:255',
            'email'     => 'required|email|max:255|unique:clientes,email,' . $cliente->id,
            'telefono'  => 'nullable|string|max:50',
            'direccion' => 'nullable|string|max:255',
        ]);

        $cliente->update($data);

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado.');
    }
}
