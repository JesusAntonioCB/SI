<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Proyectos;
class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = DB::table('proyectos')->get();
        return view('proyectos.index',['proyectos'=>$proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = DB::table('grupos')->get();
        $salones = DB::table('salones')->get();
        $evaluadores = DB::table('evaluadores')->get();
        return view('proyectos.create',[
          'grupos'=>$grupos,
          'salones'=>$salones,
          'evaluadores'=>$evaluadores
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $proyecto = new Proyectos;
      $proyecto->nombre_proyecto = $request->get('nproyecto');
      $proyecto->memoria = $request->get('memoria');
      $proyecto->fecha = $request->get('fecha');
      $proyecto->horario_expo = $request->get('horario');
      $proyecto->promedio = $request->get('promedio');
      $proyecto->descripcion = $request->get('descripcion');
      $proyecto->idgrupo = $request->get('grupo');
      $proyecto->idsalones = $request->get('salon');
      $proyecto->idevaluador = $request->get('evaluador');
      $proyecto->save();
      return Redirect::to('Proyectos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
