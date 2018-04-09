@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row-int pt-3">
        <div class="col-lg-12">
            <div class="panel panel-default">
              {{ Breadcrumbs::render('list-pacientes') }}
              <legend class="legend-titulo">Lista de pacientes</legend>
              <hr>
            </div>
        </div>
    </div>
</div>
@endsection
