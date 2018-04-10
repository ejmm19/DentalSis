<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      return view('home')->with(['datempresa' => $this->getEmpresa()]);
    }
    public function Versettings(){ //Funcion que se activa cuando accionamos la ruta ajustes
      $this->getEmpresa(); //llamamos a la función getEmpresa para obtener colección de datos de empresa
      return view('admin.settings')->with(['datempresa' => $this->getEmpresa()]); //retornamos a una vista con la colección de datos
    }
    public function listPacientes(){
      // $pacientes = DB::table('pacientes')->paginate(15);
    return view('viewsUser.pacientes.list-pacientes')->with(['datempresa' => $this->getEmpresa()/*,'pacientes'=>$pacientes*/]);
    }
    public function getEmpresa(){ //Obtiene los datos de la tabla empresa y los guarda en cache
      if (\Cache::has('datempresa')) {  //Pregunta si la variable cache existe
        $empresa = \Cache::get('datempresa'); //si es así la guarda en la variable $empresa
      }else{
        $empresadat = DB::table('empresa')->get(); //Si no es así, realiza consulta en la Base de datos y el resultado lo guarda en la variable $empresadat
        \Cache::put('datempresa', $empresadat, 60); //seteamos una variable cache datempresa con el valor guardado en la variable $empresadat y la variable durará 60 minutos
        $empresa = \Cache::get('datempresa'); // guardamos la variable cache en variable $empresa para luego retornar
      }
      return $empresa; //devolvemos la coleccion de datos
    }
}
