@extends('layouts.plantilla')

@section('titulo','Crear materia')

@section('contenido')
    <h1>Creando una materia</h1>
    <form action="{{route('materia.store')}}" method="post">
        @csrf
        <label>Nombre de la materia</label><br>
        <input type="text" name="nombreMateria"><br><br>
        <label>Nombre actividad 1</label><br>
        <input type="text" name="nombreActividad1"><br>
        <label>Calificacion: </label>
        <input type="text" name="calificacionActividad1"><br><br>
        <label>Nombre actividad 2</label><br>
        <input type="text" name="nombreActividad2"><br>
        <label>Calificacion: </label>
        <input type="text" name="calificacionActividad2"><br><br>
        <label>Nombre actividad 3</label><br>
        <input type="text" name="nombreActividad3"><br>
        <label>Calificacion: </label>
        <input type="text" name="calificacionActividad3"><br><br>
        <label>Nombre actividad 4</label><br>
        <input type="text" name="nombreActividad4"><br>
        <label>Calificacion: </label>
        <input type="text" name="calificacionActividad4"><br><br>
        <label>Nombre actividad 5</label><br>
        <input type="text" name="nombreActividad5"><br>
        <label>Calificacion: </label>
        <input type="text" name="calificacionActividad5"><br><br>
        <button type="submit">Añadir nueva materia</button>
    </form>
    <br><br><br>
    <form action="{{route('materia.index')}}">
        <button type="submit">Regresar</button>
    </form>
@endsection