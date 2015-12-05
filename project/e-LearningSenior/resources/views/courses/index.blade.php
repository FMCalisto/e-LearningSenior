@extends('base')

@section('content')

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="fp-cursos.html">
                        Todos
                    </a>
                </li>
                <li>
                    <a href="fp-cursos-culinaria.html">Culin&aacute;ria</a>
                </li>
                <li>
                    <a href="fp-cursos-financas.html">Finan&ccedil;as</a>
                </li>
                <li>
                    <a href="fp-cursos-linguas.html">L&iacute;nguas</a>
                </li>
                <li>
                    <a href="fp-cursos-saude.html">Sa&uacute;de</a>
                </li>
                <li>
                    <a href="fp-cursos-tecnologia.html">Tecnologia</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
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

            <!-- Page Header -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Finan&ccedil;as
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="col-md-4 portfolio-item">
                <a href="fp-curso-exemplo.html">
                    <img class="img-responsive" src="./img/course3.png" alt="">
                </a>
                <h3>
                    <a href="fp-curso-exemplo.html">Curso de An&aacute;lise de Mercados</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>

            <!-- Projects Row -->
            <div class="row">
                
            </div>
            <!-- /.row -->

            <!-- Page Header -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">L&iacute;nguas
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="col-md-4 portfolio-item">
                <a href="fp-curso-exemplo.html">
                    <img class="img-responsive" src="./img/course6.png" alt="">
                </a>
                <h3>
                    <a href="#">Curso de Franc&ecirc;s</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>

            <div class="col-md-4 portfolio-item">
                <a href="fp-curso-exemplo.html">
                    <img class="img-responsive" src="./img/course5.png" alt="">
                </a>
                <h3>
                    <a href="fp-curso-exemplo.html">Curso de Italiano</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>

            <!-- Page Header -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sa&uacute;de
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="col-md-4 portfolio-item">
                <a href="fp-curso-exemplo.html">
                    <img class="img-responsive" src="./img/course4.png" alt="">
                </a>
                <h3>
                    <a href="fp-curso-exemplo.html">Curso de Yoga</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>

            <!-- Page Header -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tecnologia
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="col-md-4 portfolio-item">
                <a href="fp-curso-exemplo.html">
                    <img class="img-responsive" src="./img/course1.png" alt="">
                </a>
                <h3>
                    <a href="fp-curso-exemplo.html">Curso de Excel</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="fp-curso-exemplo.html">
                    <img class="img-responsive" src="./img/course2.png" alt="">
                </a>
                <h3>
                    <a href="fp-curso-exemplo.html">Curso de Powerpoint</a>
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