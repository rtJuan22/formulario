@extends('layout/template')

@section('title', 'Alumnos')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Formulario</h2>

        <a href="{{ url('alumnos/create') }}" class="btn btn-primary btn-sm">Nuevo Registro</a>
    </div>
</main>