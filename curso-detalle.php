<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso-detalle | Formando Código</title>
    <?php include "php/head.php"?>
</head>
<body>
    <main>
        <?php include "php/menu.php"?>
        <nav class="light-blue">
            <div class="container">
                <div class="row">
                    <div class="nav-wrapper">
                        <div class="col s12">
                            <a href="#!" class="breadcrumb">Inicio</a>
                            <a href="#!" class="breadcrumb">Curso</a>
                            <a href="#!" class="breadcrumb">PHP avanzado</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <section class="curso-detalle">
            <div class="container">
                <div class="row">
                    <aside class="col l4 m12 s12">
                        <div class="seibar">
                            <div class="card">
                                <div class="icono" style="background-image: url('img/cursos/html5.jpg') !important;"></div>
                                <div class="card-content" style="padding-top: 0px;">
                                    <div class="texto-detalle">
                                        <div class="hide-on-large-only center-align">
                                            <h3 class="">Menu responsive con SlickNav</h3>
                                            <p>Implementa un menu responsive en tu web</p>
                                        </div>
                                        <ul>
                                            <li><i class="fa fa-user"></i> <a href="#">Ing. Cesar Mejia</a></li>
                                            <li><i class="fa fa-bars"></i>Programción</li>
                                            <li><i class="fa fa-calendar"></i>22/01/2013</li>
                                            <li><i class="fa fa-video-camera"></i> 55 videos</li>
                                            <li><i class="fa fa-clock-o"></i> Duración: 40 h</li>
                                        </ul>
                                    </div>
                                    <div class="caracteristicas-boton">
                                        <div class="detalle-boton">
                                            <a href="ver-curso.php" class="waves-effect waves-light btn-large light-blue">VER CURSO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <div class="col l8 m12 s12">
                        <div class="texto-curso-grande hide-on-small-only">
                            <h3>Menu responsive con SlickNav</h3>
                            <p class="curse-slogan">Implementa un menu responsive en tu web</p>
                        </div>
                        <div class="video-container">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/QtXby3twMmI" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="curso-detalle-1">
            <div class="contenido-tab">
                <div class="container">
                    <div class="row">
                        <div class="col s12 l12 m12">
                            <ul class="tabs">
                                <li class="tab col s12 l3 m3"><a class="active" href="#test1">CONTENIDO</a></li>
                                <li class="tab col s12 l3 m3"><a href="#test2">INSTRUCTORES</a></li>
                                <li class="tab col s12 l3 m3"><a href="#test3">COMENTARIOS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!--Contenido-->
                    <div id="test1" class="col l12">
                        <div class="col l8">
                            <p>Crear menu responsive puede ser una tarea tediosa y en muchos casos nos quita tiempo, slicknav es un plugin de jquery que nos solcionará los problemas a la hora de querer una web responsive ya que no solo se adapta al diseño que tengas sino que puedes personalizarlo al maximo consiguiendo resultados impresionantes.</p>
                            <ul class="collection with-header video-lista">
                                <li class="collection-header cabecera"><h5>1. Primer tema</h5></li>
                                <li class="collection-item"><a href="" class="item-video"><i class="fa fa-lock candado"></i> Lorem ipsum dolor sit amet, consectetur.</a><span>11:20</span></li>
                                <li class="collection-item"><a href="" class="item-video"><i class="fa fa-play-circle-o play"></i> Lorem ipsum dolor.</a><span>11:20</span></li>
                                <li class="collection-item"><a href="" class="item-video"><i class="fa fa-lock candado"></i> Lorem ipsum dolor sit amet, consectetur.</a><span>11:20</span></li>
                                <li class="collection-item"><a href="" class="item-video"><i class="fa fa-play-circle-o play"></i> Lorem ipsum dolor.</a><span>11:20</span></li>
                            </ul>
                            <ul class="collection with-header video-lista">
                                <li class="collection-header cabecera"><h5>2. Primer tema</h5></li>
                                <li class="collection-item"><a href="" class="item-video"><i class="fa fa-lock candado"></i> Lorem ipsum dolor sit amet, consectetur.</a><span>11:20</span></li>
                                <li class="collection-item"><a href="" class="item-video"><i class="fa fa-play-circle-o play"></i> Lorem ipsum dolor.</a><span>11:20</span></li>
                                <li class="collection-item"><a href="" class="item-video"><i class="fa fa-lock candado"></i> Lorem ipsum dolor sit amet, consectetur.</a><span>11:20</span></li>
                                <li class="collection-item"><a href="" class="item-video"><i class="fa fa-play-circle-o play"></i> Lorem ipsum dolor.</a><span>11:20</span></li>
                            </ul>
                            <ul class="collection with-header video-lista">
                                <li class="collection-header cabecera"><h5>3. Primer tema</h5></li>
                                <li class="collection-item"><a href="" class="item-video"><i class="fa fa-lock candado"></i> Lorem ipsum dolor sit amet, consectetur.</a><span>11:20</span></li>
                                <li class="collection-item"><a href="" class="item-video"><i class="fa fa-play-circle-o play"></i> Lorem ipsum dolor.</a><span>11:20</span></li>
                                <li class="collection-item"><a href="" class="item-video"><i class="fa fa-lock candado"></i> Lorem ipsum dolor sit amet, consectetur.</a><span>11:20</span></li>
                                <li class="collection-item"><a href="" class="item-video"><i class="fa fa-play-circle-o play"></i> Lorem ipsum dolor.</a><span>11:20</span></li>
                            </ul>
                        </div>
                        <div class="col l4">
                            <div class="categoria">
                                <h2>Categoria:</h2>
                                <div class="divider"></div>
                                <div class="col l5 m6 s6">
                                    <img src="img/icono-web.png" class="responsive-img" alt="">
                                </div>
                                <div class="col l7 m6 s6">
                                    <span>Web</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--profesores-->
                    <div id="test2" class="col s12">
                        <div class="row">
                            <div class="col s12 m12 l8 offset-l2 cad-contenido">
                                <div class="card">
                                <div class="row">
                                    <div class="col s12 m6 l7 push-l5">
                                        <div class="descripcion-cad">
                                            <h4><a href="profesor-perfil.php">CÉSAR CUEVA M.</a></h4>
                                            <h5>Programación web</h5>
                                            <p>Lorem ipsum dolor sit amet,  eaque explicabo, id inventore, iure perspiciatis qui sapiente soluta voluptatum. Cum debitis delectus officia quibusdam tempore!</p>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l5 pull-l7">
                                        <div class="imagen-cad">
                                            <img class="activator responsive-img" src="img/profesores.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="card">
                                    <div class="row">
                                        <div class="col s12 m6 l7 push-l5">
                                            <div class="descripcion-cad">
                                                <h4><a href="profesor-perfil.php">CÉSAR CUEVA M.</a></h4>
                                                <h5>Programación web</h5>
                                                <p>Lorem ipsum dolor sit amet,  eaque explicabo, id inventore, iure perspiciatis qui sapiente soluta voluptatum. Cum debitis delectus officia quibusdam tempore!</p>
                                            </div>
                                        </div>
                                        <div class="col s12 m6 l5 pull-l7">
                                            <div class="imagen-cad">
                                                <img class="activator responsive-img" src="img/profesores.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                    <!--comentarios-->
                    <div id="test3" class="col s12">
                        <div class="row">
                            <div class="col  m12 s12 l8 offset-l2">
                                <h2 class="subtitulos">4 Comentarios</h2>
                                <div class="card-panel hoverable">
                                    <div class="comentario">
                                        <a href="">Jesús Alzamara</a>
                                        <div class="date">October 24, 2015 at 07.50 am</div>
                                        <p>I am a very simple card. I am good at containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m12 l8 offset-l2">
                                <h2 class="subtitulos">Comentar</h2>
                                <form action="" class="col s12">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                                        <label for="textarea1">Mensaje</label>
                                    </div>
                                    <div class="col s12 m12 l12">
                                        <button class="btn-large disabled">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <?php include "php/footer.php"?>
    </main>
    <?php include "php/script.php"?>
</body>
</html>