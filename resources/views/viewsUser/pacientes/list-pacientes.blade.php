@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row-int pt-3">
        <div class="col-lg-12">
            <div class="panel panel-default" id="table-pacientes-list">
              {{ Breadcrumbs::render('list-pacientes') }}
              <div class="d-flex">
                <div class="mr-auto p-2"><legend class="legend-titulo">Lista de pacientes</legend></div>
                <div class="p-2">
                  <form class="form-inline">
                    <div class="md-form mt-0">
                      <input class="form-control" v-model="busqueda" type="text" placeholder="Buscar" aria-label="Search">
                    </div>
                  </form>
                </div>
              </div>
              <hr>
                <table class="table" id="">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">N°</th>
                      <th scope="col">Nombres</th>
                      <th scope="col">Apellidos</th>
                      <th scope="col">Correo</th>
                      <th scope="col">Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- <tr v-if="resultado == 'vacio'">
                      <td>Vacio</th>
                    </tr> --}}
                    <template v-for="paciente in pacientes">
                      <tr>
                        <th scope="row">@{{ paciente.id }}</th>
                        <td>@{{ paciente.nombre }}</td>
                        <td>@{{ paciente.apellidos }}</td>
                        <td>@{{ paciente.correo }}</td>
                        <td><a :href="'ver/'+paciente.id"><i class="fas fa-eye"></i></a></td>
                      </tr>
                    </template>
                  </tbody>
                </table>
                <h5 v-if="resultado == 'vacio'" class="text-center">No hay conindencias con: <strong>@{{ busqueda }}</strong></h5>
                <nav aria-label="Page navigation example" v-if="resultado == 'algo'">
                  <ul class="pagination justify-content-end">
                    <li class="page-item" :class="[ paginate.current_page > 1 ? '' : 'disabled' ]">
                      <a class="page-link" href="#" @click.prevent="changePage(paginate.current_page - 1)"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item" v-for="page in pagesNumber" :class="[ page == isActived ? 'active' : '' ]">
                      <a class="page-link" href="#" @click.prevent="changePage(page)">@{{ page }}</a>
                    </li>
                    <li class="page-item" :class="[ paginate.current_page < paginate.last_page ? '' : 'disabled' ]">
                      <a class="page-link" href="#" @click.prevent="changePage(paginate.current_page + 1)"><i class="fas fa-chevron-right"></i></a>
                    </li>
                  </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
