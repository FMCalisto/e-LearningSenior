@extends('base')

@include('partitials.side-bar')

@if(Request::path() == 'courses')

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


@elseif(Request::path() == 'courses.course')

<style type="text/css">
      body {
        padding-top: 50px;
        padding-bottom: 40px;
      }
    .jumbotron{
        background:#358cce;
        color:#fff;
      }
      
      footer{
        maring-top:30px;
        display:block;
      }
      .thumbnail{
        margin-bottom:30px;
      }
      .thumbnail img{
        min-width:100%;
        width:100%;
      }
      
      .nav-tabs{
        margin-bottom:15px;
    }
        /************* VIDEO *******************************/

        .fluid-width-video-wrapper {
            width: 100%;
            position: relative;
            padding: 0;
        }
        .vendor {
            margin-bottom: 0px;
        }

        .container-video {
            width: 100%;
            min-width: 100%;
            position: relative;
            padding: 0;
            height: 100%;
        }

        .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border:0px;
        }

        .video-well.well{
            -webkit-border-radius:0px;
                -moz-border-radius:0px;
                    border-radius:0px;
        }
        
        @media (max-width: 768px) {

        .nav-tabs.nav-justified > li{
            float:left;
        }
    }
    
</style>


    <!-- Navigation Menu -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="fp-index.html">Inicio</a>
                    </li>
                    <li class="active">
                        <a href="fp-cursos.html">Cursos</a>
                    </li>
                    <li>
                        <a href="fp-perfil.html">Perfil</a>
                    </li>
                    <li>
                        <a href="fp-sobre.html">Sobre</a>
                    </li>
                    <li>
                        <a href="fp-ajuda.html">Ajuda</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="fp-entrar.html">Entrar</a>
                    </li>
                    <li>
                        <a href="fp-registar.html">Registar</a>
                    </li>
                </ul>
                <div class="col-sm-3 col-md-3 pull-right">
                    <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- END Navigation Menu -->



<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      
    <!-- CONTENT SIDE-->
    <div class="col-md-12 col-md-12">
    <!-- article-->

    <h2 class="">Curso de An&aacute;lise de Mercados</h2>

    
        <!-- VIDEO-->
        <div class="vendor">
            <div class="container-video">
                <div class="fluid-width-video-wrapper" style="padding-top: 50%;">
                    <iframe src="https://www.youtube.com/embed/124q665ESVs" id="fitvid862574"></iframe>
                </div> 
            </div>
        </div>
        <!-- /VIDEO-->
        <div class="well video-well">
            <p>
            Description of video. Few words about your project video. This video Directed by: <a href="https://academic.ieee.org/" target="_blank" rel="nofollow">academic.ieee.org/</a>
            </p>
        </div>
        <!-- .pager -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-center">
            <ul class="pager">
              <li class="previous"><a href="#">&larr; Aula Anterior</a></li>
              <li class="next"><a href="#">Aula Seguinte &rarr;</a></li>
            </ul>
        </div>
        <!-- /.pager -->
        <!--/ VIDEO -->


<!-- INNER ROW-FLUID-->

</div>

<div class="row">

    <div class="col-sm-12 col-lg-12">
        <a class="btn btn-block btn-lg btn-success">Inscrever no Curso</a>
        <a class="btn btn-block btn-lg btn-warning" href="fp-professor.html">Contactar o Professor</a>
    </div>

</div>
<!-- /CONTENT SIDE-->

</div>

 <hr>
 <!-- related projects -->
<div class="row related-projects">

<div class="col-sm-12 col-lg-12 ">
    <div class="page-header">
        <h3><i class="icon-info-sign"></i>  CURSOS RELACIONADOS </h3>
    </div>
</div>
 
 <!-- ITEM -->
 <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <div class="thumbnail">
        <!-- VIDEO-->
        <div class="vendor">
            <div class="container-video">
                <div class="fluid-width-video-wrapper" style="padding-top: 50%;">
                    <iframe src="http://player.vimeo.com/video/35108500?color=ffffff" id="fitvid862574"></iframe>
                </div> 
            </div>
        </div>
        <!-- /VIDEO-->
        <!-- CAPTION -->
        <div class="caption">
            <h3 class="">Project title</h3>
            <p class="">This project presents beautiful style graphic &amp; design. VERSO provides modern features</p>
            <p>
            <a class="btn btn-primary btn-block" href="#">
            <i class="icon-link icon-x2"></i> Read more
            </a>
            </p>
        </div> 
        <!--END CAPTION -->
    </div>
<!-- END: THUMBNAIL -->
</div>
<!-- END ITEM -->

<!-- ITEM -->
 <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <div class="thumbnail">
        <!-- VIDEO-->
        <div class="vendor">
            <div class="container-video">
                <div class="fluid-width-video-wrapper" style="padding-top: 50%;">
                    <iframe src="http://player.vimeo.com/video/35108500?color=ffffff" id="fitvid862574"></iframe>
                </div> 
            </div>
        </div>
        <!-- /VIDEO-->
        <!-- CAPTION -->
        <div class="caption">
            <h3 class="">Project title</h3>
            <p class="">This project presents beautiful style graphic &amp; design. VERSO provides modern features</p>
            <p>
            <a class="btn btn-primary btn-block" href="#">
            <i class="icon-link icon-x2"></i> Read more
            </a>
            </p>
        </div> 
        <!--END CAPTION -->
    </div>
<!-- END: THUMBNAIL -->
</div>
<!-- END ITEM -->

<!-- ITEM -->
 <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <div class="thumbnail">
        <!-- VIDEO-->
        <div class="vendor">
            <div class="container-video">
                <div class="fluid-width-video-wrapper" style="padding-top: 50%;">
                    <iframe src="http://player.vimeo.com/video/35108500?color=ffffff" id="fitvid862574"></iframe>
                </div> 
            </div>
        </div>
        <!-- /VIDEO-->
        <!-- CAPTION -->
        <div class="caption">
            <h3 class="">Project title</h3>
            <p class="">This project presents beautiful style graphic &amp; design. VERSO provides modern features</p>
            <p>
            <a class="btn btn-primary btn-block" href="#">
            <i class="icon-link icon-x2"></i> Read more
            </a>
            </p>
        </div> 
        <!--END CAPTION -->
    </div>
<!-- END: THUMBNAIL -->
</div>
<!-- END ITEM -->

<!-- ITEM -->
 <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <div class="thumbnail">
       <!-- VIDEO-->
        <div class="vendor">
            <div class="container-video">
                <div class="fluid-width-video-wrapper" style="padding-top: 50%;">
                    <iframe src="http://player.vimeo.com/video/35108500?color=ffffff" id="fitvid862574"></iframe>
                </div> 
            </div>
        </div>
        <!-- /VIDEO-->
        <!-- CAPTION -->
        <div class="caption">
            <h3 class="">Project title</h3>
            <p class="">This project presents beautiful style graphic &amp; design. VERSO provides modern features</p>
            <p>
            <a class="btn btn-primary btn-block" href="#">
            <i class="icon-link icon-x2"></i> Read more
            </a>
            </p>
        </div> 
        <!--END CAPTION -->
    </div>
<!-- END: THUMBNAIL -->
</div>
<!-- END ITEM -->

</div>
 <!-- related projects -->
 
</div> <!-- /container -->
<!--/ CONTENT -->

    <!-- Page Content -->
    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Francisco Maria Calisto (70916) | Bruno Cardoso (72619) | Ana Beatriz Alves (74190) | Inês Urbano (75296)</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="./js/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <!-- Le javascript
    ================================================== -->

    <!-- RESPONSIVE VIDEO PLUGIN -->
    <script src="assets/js/jquery.fitvids.min.js" type="text/javascript"></script>

    <script>
            // Basic FitVids Test
            jQuery(".container").fitVids();
              
    </script>

@endif

@stop