@extends('layouts.app')

@section('content')

<style>
    .home-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;
        margin-top: 50px;
    }

    .home-button {
        display: block;
        width: 200px;
        padding: 15px;
        font-size: 18px;
        text-align: center;
        text-decoration: none;
        color: white;
        background-color: #0d6efd;
        border-radius: 8px;
        transition: background-color 0.3s;
    }

    .home-button:hover {
        background-color: #084298;
    }
</style>

<div class="home-container">
    <h1>Panel Principal</h1>

    <a href="{{ route('clientes.index') }}" class="home-button">Clientes</a>
    <a href="{{ route('estudiantes.index') }}" class="home-button">Estudiantes</a>
    <a href="{{ route('empleados.index') }}" class="home-button">Empleados</a>
    <a href="{{ route('productos.index') }}" class="home-button">Productos</a>
</div>

@endsection
