<?php

namespace App\Http\Controllers;

use App\Models\materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materias = materia::orderBy('id','desc')->get();
        return view("materia.index",compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("materia.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $materia = new materia();
        $materia->nombreMateria = $request->nombreMateria;
        $materia->nombreActividad1 = $request->nombreActividad1;
        $materia->calificacionActividad1 = $request->calificacionActividad1;
        $materia->nombreActividad2 = $request->nombreActividad2;
        $materia->calificacionActividad2 = $request->calificacionActividad2;
        $materia->nombreActividad3 = $request->nombreActividad3;
        $materia->calificacionActividad3 = $request->calificacionActividad3;
        $materia->nombreActividad4 = $request->nombreActividad4;
        $materia->calificacionActividad4 = $request->calificacionActividad4;
        $materia->nombreActividad5 = $request->nombreActividad5;
        $materia->calificacionActividad5 = $request->calificacionActividad5;
        $materia->save();
        return redirect()->route("materia.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(materia $materia)
    {
        return view("materia.edit",compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, materia $materia)
    {
        $materia->nombreMateria = $request->nombreMateria;
        $materia->nombreActividad1 = $request->nombreActividad1;
        $materia->calificacionActividad1 = $request->calificacionActividad1;
        $materia->nombreActividad2 = $request->nombreActividad2;
        $materia->calificacionActividad2 = $request->calificacionActividad2;
        $materia->nombreActividad3 = $request->nombreActividad3;
        $materia->calificacionActividad3 = $request->calificacionActividad3;
        $materia->nombreActividad4 = $request->nombreActividad4;
        $materia->calificacionActividad4 = $request->calificacionActividad4;
        $materia->nombreActividad5 = $request->nombreActividad5;
        $materia->calificacionActividad5 = $request->calificacionActividad5;
        $materia->save();
        return redirect()->route("materia.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(materia $materia)
    {
        $materia->delete();
        return redirect()->route("materia.index");
    }
}
