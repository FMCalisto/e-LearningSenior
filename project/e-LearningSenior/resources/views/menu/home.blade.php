@extends('base')

@section('content')

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('./img/slide5.png');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('./img/slide6.png');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('./img/slide7.png');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('./img/slide8.png');"></div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>
<!-- /.Header Carousel -->

<!-- Page Header -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Cursos
            <small>Mais Populares</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<!-- Projects Row -->
<div class="row">
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
    <div class="col-md-4 portfolio-item">
        <a href="fp-curso-exemplo.html">
            <img class="img-responsive" src="./img/course3.png" alt="">
        </a>
        <h3>
            <a href="fp-curso-exemplo.html">Curso de An&aacute;lise de Mercados</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
    </div>
</div>
<!-- /.row -->

<!-- Page Header -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Cursos
            <small>Mais Votados</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<!-- Projects Row -->
<div class="row">
    <div class="col-md-4 portfolio-item">
        <a href="fp-curso-exemplo.html">
            <img class="img-responsive" src="./img/course4.png" alt="">
        </a>
        <h3>
            <a href="fp-curso-exemplo.html">Curso de Yoga</a>
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
    <div class="col-md-4 portfolio-item">
        <a href="fp-curso-exemplo.html">
            <img class="img-responsive" src="./img/course6.png" alt="">
        </a>
        <h3>
            <a href="#">Curso de Franc&ecirc;s</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
    </div>
</div>
<!-- /.row -->

<!-- Script to Activate the Carousel -->
<script>
	$('.carousel').carousel({
		interval: 5000 //changes the speed
	})
</script>

@stop