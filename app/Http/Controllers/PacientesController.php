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
          $pacientesdat = DB::table('pacientes')->where('nombre', 'like', $request->buscar.'%')->get();
        return $pacientesdat;
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
    public function show($id){
        $paciente = DB::table('pacientes')->where('id',$id)->get();
        return view('viewsUser.pacientes.ver-paciente')->with(['paciente'=>$paciente]);
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
