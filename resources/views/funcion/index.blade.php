@extends('../templates.template')
@section('titulo','Sistema de Seguimiento - Coordinaciones')
@section('content')
{{--Esquema principal para ingreso de función--}}
<div>
    <div class="btn-group">
        {{--Botón para agregar paréntesis--}}
        <button id="parentesis" class="btn btn-success fa-solid fa-check"></button>
        {{--Botón para eliminar función--}}
        <button id="eliminar" class="btn btn-danger fa-solid fa-xmark"></button>
        {{--Botón para buscar funciones e información--}}
        <button type="button" class="btn btn-primary fa-solid fa-f" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </button>        
        {{--Campo para mostrar resultados de la función--}}
        <label id="expresion" class="form-label"></label>
    </div>
    <div>
        {{--Campo para ingresar función--}}
         <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="entrada" name="coordinacion" type="text" placeholder="ingrese ecuación">
    </div>
</div>
{{--Ventana para visualizar lista de funciones--}}
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
                    {{-- Barra de busqueda --}}
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="" id="busqueda" placeholder="Search">
                    <div><br>
                        {{--Lista de Funciones--}}
                        <select name="" class="form-control" multiple id="lista"></select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    {{--Variable que muestra la información de la función--}}
                    <label id="info"></label>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
@endsection