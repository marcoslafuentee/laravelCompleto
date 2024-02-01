<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;
use App\Models\Profesor;
use Illuminate\Http\Request;




class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $profesores = Profesor::all();
      return view("profesores.listado",["profesores"=>$profesores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("profesores.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesorRequest $request)
    {
        $datos = $request->input();
        $profesor = new Profesor ($datos);
        info("Profesor: ".$profesor);
        $profesor->save();
//        return redirect(route("profesores.index"));
        $profesores = Profesor::all();
        return view("profesores.listado",["profesores"=>$profesores]);


        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        return "Estoy en el show con ";
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesorRequest $request, Profesor $profesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
        //
    }
}
