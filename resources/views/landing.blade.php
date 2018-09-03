@extends('layouts.app')

@section('content')
<div class="container body-landing">
    <section class="banner">
        <div class="row">
            <div class="col-md-6">
                <h1>HomeUWU</h1>
                <h2>Como en tu casa en cualquier parte del mundo</h2>
            </div>
            <div class="col-md-6">
                <h2>Registrate!</h2>
                <form action="#">
                        <input type="text" placeholder="Nombre">
                        <input type="text" placeholder="Correo electronico">
                        <input type="submit" value="Registrarme">
                </form>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="row">
            <div class="col-md-6">
                <p>
                   Viajar por el mundo mientras te hospedas en casa ya no es un sueño
                   HomeUWU tiene los mejores espacios para ti al mejor precio.
                   ¿Tienes un espacio que te gustaria rentar? Registrate y sube fotos
                   para promocionar tu espacio.
                </p>
            </div>
            <div class="col-md-6"></div>
        </div>
    </section>
    <section class="try it">
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                    <p>
                        Comienza a vivir tu sueño de viajar, encuentra tu hogar aqui!
                    </p>
                    <button>Buscar sitio</button>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="row">
            <div class="col-md-6">
                <h3>Somos todo oidos!!</h3>
                <p>
                    Estamos interesados en leer tus opiniones, dejanos tus datos y tus comentarios para entrar en contacto.
                </p>
            </div>
            <div class= "col-md-6">
                <form>
                    <input type="text" placeholder="Nombre">
                    <input type="text" placeholder="Correo">
                    <textarea rows="4" cols="50" placeholder="Comentario...">
                    </textarea>

                </form>
            </div>
        </div>
    </section>
    <footer>
        footer
    </footer>
</div>
@endsection