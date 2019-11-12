<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Evaluadores;

class EvaluadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluadores = DB::table('evaluadores')->get();
        return view('evaluadores.index',['evaluadores'=>$evaluadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evaluadores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Evaluador = new Evaluadores;
      $Evaluador->nombres = $request->get('nevaluador');
      $Evaluador->ap_paterno = $request->get('apevaluador');
      $Evaluador->ap_materno = $request->get('amevaluador');
      $Evaluador->especialidad = $request->get('especialidad');
      $Evaluador->save();
      return Redirect::to('Evaluadores');
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
      return view('evaluadores.edit',['evaluadores'=> Evaluadores::find($id)]);
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
      $Evaluador = Evaluadores::findOrFail($id);
      $Evaluador->nombres = $request->get('nevaluador');
      $Evaluador->ap_paterno = $request->get('apevaluador');
      $Evaluador->ap_materno = $request->get('amevaluador');
      $Evaluador->especialidad = $request->get('especialidad');
      $Evaluador->update();
      return Redirect::to('Evaluadores');
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
