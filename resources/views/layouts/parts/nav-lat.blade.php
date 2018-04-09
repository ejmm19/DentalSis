{{-- <ul class="list-group list-group-flush" id="nav-lat">
  <li class="list-group-item">
    <a href="#">Cras justo odio</a>
  </li>
  <li class="list-group-item">
    <a href="#">Dapibus ac facilisis in</a>
  </li>
  <li class="list-group-item">
    <a href="#">Morbi leo risus</a>
  </li>
  <li class="list-group-item">
    <a href="#">Porta ac consectetur ac</a>
  </li>
  <li class="list-group-item">
    <a href="#">Vestibulum at eros</a>
  </li>
</ul> --}}
<div class="accordion" id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <a class="itm-menu-lat collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-address-book mr-2"></i>Pacientes</a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body pt-0">
        <h5 class="mb-0">
          <a class="itm-menu-lat ml-4 collapsed" href="{{url('pacientes/listar')}}"><i class="fas fa-list-ul mr-2"></i>Listar</a>
        </h5>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <a class="itm-menu-lat collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <a class="itm-menu-lat collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur
      </div>
    </div>
  </div>
</div>
