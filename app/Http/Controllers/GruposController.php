<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Grupo;
class GruposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = DB::table('grupos')->get();
        return view('grupos.index',['grupos'=>$grupos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
      $grupos = new Grupo;
      $grupos->grupos = $request->get('ngrupo');
      $grupos->turno = $request->get('turno');
      $grupos->estado = "Activo";
      // $dt = date('Y-m-d H:i:s');
      // $grupos->created_at =$dt;
      $grupos->save();
      return Redirect::to('Grupos');

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
        return view('grupos.edit',['grupos'=> Grupo::find($id)]);
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
      $grupos =  Grupo::findOrFail($id);
      $grupos->grupos = $request->get('ngrupo');
      $grupos->turno = $request->get('turno');
      $grupos->estado = "Activo";
      // $dt = date('Y-m-d H:i:s');
      // $grupos->created_at =$dt;
      $grupos->update();
      return Redirect::to('Grupos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $grupos =  Grupo::findOrFail($id);
      $grupos->estado = "Inactivo";
      $grupos->update();
      // FUNCIONA!!!!!!
       // $grupo = Grupo::findOrFail($id);
       // $grupo->destroy();

       // redirect
       // Session::flash('message', 'Successfully deleted the grupo!');
      return Redirect::to('Grupos');
    }
}
