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
                        <h1 class="page-header">

                            Culin&aacute;ria

                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                @foreach($courses as $course)
                <div class="col-md-4 portfolio-item">
                    <a href="fp-curso-exemplo.html">
                        <img class="img-responsive" src="{{ url('/courses', $course->img) }}" alt="">
                    </a>
                    <h3>
                        <a href="{{ url('/courses', $course->id) }}">

                            {{ $course->title }}

                        </a>
                    </h3>
                    <div class="body">

                        {{ $course->body }}

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

@stop