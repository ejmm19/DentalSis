@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row-int pt-3">
        <div class="col-lg-12">
            <div class="panel panel-default" id="">
              {{ Breadcrumbs::render('paciente' , $paciente[0]->id  ) }}
              <div class="d-flex">
                <div class="mr-auto p-2"><legend class="legend-titulo">Detalles del paciente: <span>{{ $paciente[0]->nombre }} {{ $paciente[0]->apellidos }}</span> </legend></div>
              </div>
              <hr>

            </div>
        </div>
    </div>
</div>
@endsection
