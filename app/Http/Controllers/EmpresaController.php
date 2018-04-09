<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Request $request){
      DB::table('empresa')->where('id', 1)
            ->update(['nombre' => $request->empresa,
                      'slogan' => $request->slogan,
                      'nit' => $request->nit,
                      'celular' => $request->celular,
                      'telefono' => $request->telefono,
                      'updated_at' => '2018-04-09 00:00:00']);
     $empresadat = DB::table('empresa')->get(); //Si no es así, realiza consulta en la Base de datos y el resultado lo guarda en la variable $empresadat
     \Cache::put('datempresa', $empresadat, 60); //seteamos una variable cache datempresa con el valor guardado en la variable $empresadat y la variable durará 60 minutos
      return back();
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
