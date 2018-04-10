<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
      if ($request->buscar) {
        if (\Cache::has('pacientes')) {
          $pacientes = \Cache::get('pacientes'); //si es así la guarda en la variable $empresa
        }else{
          $pacientesdat = DB::table('pacientes')->get(); //Si no es así, realiza consulta en la Base de datos y el resultado lo guarda en la variable $empresadat
          \Cache::put('pacientes', $pacientesdat, 60); //seteamos una variable cache pacientes con el valor guardado en la variable $empresadat y la variable durará 60 minutos
          $pacientes = \Cache::get('pacientes'); // guardamos la variable cache en variable $empresa para luego retornar
        }        
        return $pacientes;
      }else {
        $pacientes = DB::table('pacientes')->paginate(10);
        return [
          'paginate' =>[
              'total' => $pacientes->total(),
              'current_page' => $pacientes->currentPage(),
              'per_page' => $pacientes->perPage(),
              'last_page' => $pacientes->lastPage(),
              'from' => $pacientes->firstItem(),
              'to' => $pacientes->lastPage()
          ],
          'pacientes' => $pacientes];
      }

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
