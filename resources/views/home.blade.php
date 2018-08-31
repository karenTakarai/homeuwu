@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    You are logged in!


                     @isset($users) <!-- Si existe la variable $users -->
                        <h3>Todos los usuarios</h3>
                        <ul>
                            hola
                            @foreach ($users as $u)
                                <li>{{ $u->name }}</li>
                            @endforeach    
                        </ul>
                     @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
