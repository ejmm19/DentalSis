@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row-int pt-3">
        <div class="col-lg-12">
            <div class="panel panel-default">
              {{ Breadcrumbs::render('ajustes') }}
                <legend class="legend-titulo">Ajustes del Sistema</legend>
                {{-- <div class="opciones" data-toggle="tooltip" data-placement="top" title="Editar">
                  <a href="#" class="btn btn-fixed edit" data-toggle="modal" data-target="#form-edit-empresa"><i class="fas fa-edit"></i></a>
                </div> --}}
                <hr>
                <div class="row justify-content-end">
                  <div class="col-4">
                    <img src="{{ $datempresa[0]->imagen }}" alt="Logo {{ $datempresa[0]->nombre }}" width="200px" >
                  </div>
                </div>
                {{-- Ajustes de información de la empresa --}}
                <table class="table">
                  <thead>
                    <tr>
                      <th><h5>Nombre de la Empresa</h5></th>
                      <th><h5>{{ $datempresa[0]->nombre }}</h5></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><h5>Slogan</h5></td>
                      <td><h5>{{ $datempresa[0]->slogan }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Nit</h5></td>
                      <td><h5>{{ $datempresa[0]->nit }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Telefono</h5></td>
                      <td><h5>{{ $datempresa[0]->telefono }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Celular</h5></td>
                      <td><h5>{{ $datempresa[0]->celular }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5></h5></td>
                      <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form-edit-empresa">
                          Editar Información
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- Modal Formulario de ajustes de información de la empresa-->
                <div class="modal fade" id="form-edit-empresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modificar informacón de la empresa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="/edit-empresa">
                                {{ csrf_field() }}
                                <div class="md-form">
                                    <input type="text" class="form-control" name="empresa" value="{{ $datempresa[0]->nombre }}">
                                    <label>Nombre de la Empresa</label>
                                </div>
                                <div class="md-form">
                                    <input type="text" class="form-control" name="slogan" value="{{ $datempresa[0]->slogan }}">
                                    <label>Slogan</label>
                                </div>
                                <div class="md-form">
                                    <input type="text" class="form-control" name="nit" value="{{ $datempresa[0]->nit }}">
                                    <label>Nit</label>
                                </div>
                                <div class="md-form">
                                    <input type="text" class="form-control" name="telefono" value="{{ $datempresa[0]->telefono }}">
                                    <label>Telefono</label>
                                </div>
                                <div class="md-form">
                                    <input type="text" class="form-control" name="celular" value="{{ $datempresa[0]->celular }}">
                                    <label>Celular</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Formulario de ajustes de información de la empresa-->
                {{-- Ajustes de información de la empresa --}}
            </div>
        </div>
    </div>
</div>




@endsection
