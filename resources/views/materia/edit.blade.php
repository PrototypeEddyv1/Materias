@extends('layouts.plantilla')

@section('titulo','Editando materia')

@section('contenido')
    <h1>Editando la materia de {{$materia->nombreMateria}}</h1>
    <form action="{{route('materia.update',$materia)}}" method="post">
        @csrf
        @method('put')
        <label>Nombre de la materia</label><br>
        <input type="text" name="nombreMateria" value="{{$materia->nombreMateria}}"><br><br>
        <label>Nombre actividad 1</label><br>
        <input type="text" name="nombreActividad1" value="{{$materia->nombreActividad1}}"><br>
        <label>Calificacion: </label>
        <input type="text" name="calificacionActividad1" value="{{$materia->calificacionActividad1}}"><br><br>
        <label>Nombre actividad 2</label><br>
        <input type="text" name="nombreActividad2" value="{{$materia->nombreActividad2}}"><br>
        <label>Calificacion: </label>
        <input type="text" name="calificacionActividad2" value="{{$materia->calificacionActividad2}}"><br><br>
        <label>Nombre actividad 3</label><br>
        <input type="text" name="nombreActividad3" value="{{$materia->nombreActividad3}}"><br>
        <label>Calificacion: </label>
        <input type="text" name="calificacionActividad3" value="{{$materia->calificacionActividad3}}"><br><br>
        <label>Nombre actividad 4</label><br>
        <input type="text" name="nombreActividad4" value="{{$materia->nombreActividad4}}"><br>
        <label>Calificacion: </label>
        <input type="text" name="calificacionActividad4" value="{{$materia->calificacionActividad4}}"><br><br>
        <label>Nombre actividad 5</label><br>
        <input type="text" name="nombreActividad5" value="{{$materia->nombreActividad5}}"><br>
        <label>Calificacion: </label>
        <input type="text" name="calificacionActividad5" value="{{$materia->calificacionActividad5}}"><br><br>
        <button type="submit">Hacer cambios</button>
    </form>
    <br><br><br>
    <form action="{{route('materia.index')}}">
        <button type="submit">Regresar</button>
    </form>
@endsection