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
                <li class="{{ Request::is('home') ? 'active' : '' }}">
                    <a href="/home">Inicio</a>
                </li>
                <li class="{{ Request::is('courses') ? 'active' : '' }}">
                    <a href="/courses">Cursos</a>
                </li>
                <li class="{{ Request::is('profile') ? 'active' : '' }}">
                    <a href="/profile">Perfil</a>
                </li>
                <li class="{{ Request::is('about') ? 'active' : '' }}">
                    <a href="/about">Sobre</a>
                </li>
                <li class="{{ Request::is('help') ? 'active' : '' }}">
                    <a href="/help">Ajuda</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Entrar</a></li>
                    <li><a href="{{ url('/auth/register') }}">Registar</a></li>
                @else
                    <li>
                        <a href="/profile" aria-expanded="false">{{ Auth::user()->username }}</a>
                    </li>
                    <li>
                        <a href="{{ url('/auth/logout') }}">Sair</a>
                    </li>
                @endif
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
    </div>
    <!-- /.container -->
</nav>