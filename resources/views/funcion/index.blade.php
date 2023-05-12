@extends('../templates.template')
@section('titulo','Sistema de Seguimiento - Coordinaciones')
@section('content')
<div>
    <div class="btn-group">
        <button id="parentesis" class="btn btn-success fa-solid fa-check"></button>
        <button id="eliminar" class="btn btn-danger fa-solid fa-xmark"></button>
        <button type="button" class="btn btn-primary fa-solid fa-f" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </button>        
        <label id="expresion" class="form-label"></label>
    </div>
    <div>
         <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="entrada" name="coordinacion" type="text" placeholder="ingrese ecuación">
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Expression Wizard</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="" id="busqueda" placeholder="Search">
                    <div><br>
                        <select name="" class="form-control" multiple id="lista"></select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label id="info"></label>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
@endsection