@extends('base')

@include('partitials.side-bar')

@section('content')

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <!-- Page Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Culin&aacute;ria
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-md-4 portfolio-item">
                    <a href="fp-curso-exemplo.html">
                        <img class="img-responsive" src="./img/course8.png" alt="">
                    </a>
                    <h3>
                        <a href="fp-curso-exemplo.html">Curso de Bolos</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>
        </div>
    </div>

    @foreach($courses as $course)

        <article>

            <h2>

                <a href="{{ url('/courses', $course->id) }}">

                    {{ $course->title }}
                
                </a>

            </h2>

            <div class="body">

                {{ $course->body }}

            </div>

        </article>

    @endforeach

@stop