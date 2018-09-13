@extends('layouts.newplace')
@section('content')
        <h1 class="card-title">Nuevo alojamiento</h1>
         <form>
            <h4 for="tipoalojamiento">Tipo de alojamiento</h4>
            <div class="form-group" id="tipoalojamiento">
              <select class="form-control" >
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <h4 for="usohospedaje">Exclusivo hospedaje</h4>
            <div class="form-group" id="usohsopedaje">
              <select class="form-control" >
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
        </form>
        <div class="float-right">
          <a type="button" class="btn btn-secondary btn-md" style="color:#fff" href="distribution">Siguiente</a>
        <div>
@endsection