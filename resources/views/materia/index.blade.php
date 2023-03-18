@extends('layouts.plantilla')

@section('titulo',"Pagina inicial")

<!--Esto de layouts sirve para usar con las paginas en caso de cambiar algo, sirve en paginas grandes-->
@section('contenido')
    <?php $padding = 10?>
    <table>
        <tr>
            <td style="padding:<?php echo $padding?>px">Acciones</td>
            <td style="padding:<?php echo $padding?>px">Nombre</td>
            <td style="padding:<?php echo $padding?>px">Actividad1</td>
            <td style="padding:<?php echo $padding?>px">cal.</td>
            <td style="padding:<?php echo $padding?>px">Actividad2</td>
            <td style="padding:<?php echo $padding?>px">cal.</td>
            <td style="padding:<?php echo $padding?>px">Actividad3</td>
            <td style="padding:<?php echo $padding?>px">cal.</td>
            <td style="padding:<?php echo $padding?>px">Actividad4</td>
            <td style="padding:<?php echo $padding?>px">cal.</td>
            <td style="padding:<?php echo $padding?>px">Actividad5</td>
            <td style="padding:<?php echo $padding?>px">cal.</td>
        </tr>
        @foreach ($materias as $materia)
            <tr>
                <td style="padding:<?php echo $padding?>px">
                    <form action="{{route('materia.edit',$materia)}}">
                        <button type="submit">Editar</button>
                    </form><br>
                    <form action="{{route('materia.destroy',$materia)}}" method="POST"> 
                        @csrf 
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
                <td style="padding:<?php echo $padding?>px">{{$materia->nombreMateria}}</td>
                <td style="padding:<?php echo $padding?>px">{{$materia->nombreActividad1}}</td>
                <td style="padding:<?php echo $padding?>px">{{$materia->calificacionActividad1}}</td>
                <td style="padding:<?php echo $padding?>px">{{$materia->nombreActividad2}}</td>
                <td style="padding:<?php echo $padding?>px">{{$materia->calificacionActividad2}}</td>
                <td style="padding:<?php echo $padding?>px">{{$materia->nombreActividad3}}</td>
                <td style="padding:<?php echo $padding?>px">{{$materia->calificacionActividad3}}</td>
                <td style="padding:<?php echo $padding?>px">{{$materia->nombreActividad4}}</td>
                <td style="padding:<?php echo $padding?>px">{{$materia->calificacionActividad4}}</td>
                <td style="padding:<?php echo $padding?>px">{{$materia->nombreActividad5}}</td>
                <td style="padding:<?php echo $padding?>px">{{$materia->calificacionActividad5}}</td>
            </tr>
        @endforeach
    </table>
    <form action="{{route('materia.create')}}">
        <button type="submit">Agregar una nueva materia</button>
    </form>
@endsection