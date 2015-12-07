@extends('base')

@section('content')

        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-lg-12 col-sm-12">
                <div class="card hovercard">
                    <div class="card-background">
                        <img class="card-bkimg" alt="" src="./img/maria_pinto.png">
                        <!-- http://lorempixel.com/850/280/people/9/ -->
                    </div>
                    <div class="useravatar">
                        <img alt="" src="./img/maria_pinto.png">
                    </div>
                    
                    <div class= "card-personal" >
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading">Informacao Pessoal</div>
                      <!-- Table -->
                      <table class="table">
                        
                          <tr>
                                <td>Nome</td>
                                <td>Marta Pinto</td>
                              </tr>
                            <tr>
                                 <td>Email</td>
                                <td>mpinto@hotmail.com</td>
                              </tr>
                      </table>
                    </div>
                </div>

                    </div>
                </div>
                <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            <div class="hidden-xs">Os Meus Cursos</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                            <div class="hidden-xs">Os Meus Favoritos</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <div class="hidden-xs">Os Meus Amigos</div>
                        </button>
                    </div>
                </div>

                    <div class="well">
                      <div class="tab-content" style="height: 500px">
                        <div class="tab-pane fade in active" id="tab1">
                          <div class="col-md-4 portfolio-item">
                            <a href="fp-curso-exemplo.html">
                                <img class="img-responsive" src="./img/course3.png" alt="">
                            </a>
                            <h3>
                                <a href="fp-curso-exemplo.html">Curso de An&aacute;lise de Mercados</a>
                            </h3>
                            <h4>Progresso:</h4>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                40%
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane fade in" id="tab2">
                          <div class="col-md-4 portfolio-item">
                            <a href="fp-curso-exemplo.html">
                                <img class="img-responsive" src="./img/course8.png" alt="">
                            </a>
                            <h3>
                                <a href="fp-curso-exemplo.html">Curso de Bolos</a>
                            </h3>
                             <button  class ="btn btn-default" style ="width:150px" type="button">Remover</button> 
                          </div>
                        </div>

                        <div class="tab-pane fade in" id="tab3">
                          <h3>Atualmente nao ha contactos adicionados</h3>
                        </div>
                      </div>

                    </div>
                
                </div>




        <!-- ================================================== -->
        <!-- ================================================== -->
        <!--               FALTA O USER PROFESSOR               -->
        <!-- ================================================== -->
        <!-- ================================================== -->
        


    </div><!--/row-->

@stop