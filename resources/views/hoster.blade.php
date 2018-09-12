@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="jumbotron">
              <h1 class="display-4">*****</h1>
              <p class="lead">Esta es la evaluacion de tus huespedes</p>
              <hr class="my-4">
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
              <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
        </div>
        <div class="col-sm-4" > <!--fixear esta wea-->
            <div class="card description">
                <div class="card-body">
                    <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
                    <h5 class="card-title">Descripcion</h5>
                    <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8"> <!--fixear esta wea-->
            <div class="card description">
                <div class="card-body">
                    <h5 class="card-title">Comentarios</h5>
                    <div class="comment" style="margin: 40px 0">
                        <div class=row>
                            <div class=col-sm-2>
                                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
                            </div>
                            <div class="col-sm-10 comment-text" style="align-self:center">
                                <p class="card-text">
                                    <strong class="text-muted">Sergio Doria</strong>
                                    <small class="text-muted">1 min</small>
                                </p>
                                <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment" style="margin: 40px 0">
                        <div class=row>
                            <div class=col-sm-2>
                                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
                            </div>
                            <div class="col-sm-10 comment-text" style="align-self:center">
                                <p class="card-text">
                                    <strong class="text-muted">Karen Torres</strong>
                                    <small class="text-muted">3 min</small>
                                </p>
                                <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                            </div>
                        </div>
                    </div>         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection