<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP | Formando Código</title>
    <?php include "php/head.php"?>
</head>
<body>
    <main>
        <?php include "php/menu.php"?>
        <section class="migas miga-negra">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <ul class="migas-pan">
                            <li class="element-link"><a href="index.php">Inicio</a></li>
                            <li class="arrow-icon"><span><i class="fa fa-chevron-right"></i></span></li>
                            <li class="element-link"><a href="cursos.php">Curso</a></li>
                            <li class="arrow-icon"><span><i class="fa fa-chevron-right"></i></span></li>
                            <li class="element-link"><a href="cursos.php">Php</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="ver-curso">
            <section class="video-ver-curso">
                <div class="container">
                    <div class="row">
                        <div class="col l12 s12 m12">
                            <a class="flecha-derecha"><i class="material-icons">keyboard_arrow_left</i></a>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/RB-RcX5DS5A" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <a class="flecha-izquierda"><i class="material-icons">keyboard_arrow_right</i></a>
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
                                    <li class="tab col s3"><a class="active" href="#test1">CONTENIDO</a></li>
                                    <li class="tab col s3"><a href="#test2">INSTRUCTORES</a></li>
                                    <li class="tab col s3"><a href="#test3">COMENTARIOS</a></li>
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
                                <div class="col s12 m6 l8 offset-l2 cad-contenido">
                                    <div class="row">
                                        <div class="col l4">
                                            <div>
                                                <img src="img/perfil.png" class="responsive-img">
                                            </div>
                                        </div>
                                        <div class="col l8">
                                            <div class="card-content">
                                                <div class="info-profe">
                                                    <h4>CÉSAR ACUÑA</h4>
                                                    <h5>Programación web</h5>
                                                    <p>Lorem ipsum dolor sit amet,  eaque explicabo, id inventore, iure perspiciatis qui sapiente soluta voluptatum. Cum debitis delectus officia quibusdam tempore!</p>
                                                    <ul>
                                                        <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
                                                        <li><a href=""><i class="fa fa-twitter-square"></i></a></li>
                                                        <li><a href=""><i class="fa fa-google-plus-square"></i></a></li>
                                                        <li><a href=""><i class="fa fa-youtube-square"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--comentarios-->
                        <div id="test3" class="col s12">
                            <div class="col s12 m6 l12">
                                <div class="comentario">
                                    <div class="nombre">
                                        <span>Genial muy directo y al grano</span>
                                        <h5>Mauricio</h5>
                                        <div style="color: yellow">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                        </div>
                                    </div>
                                    <div class="contenido-comentario">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolores eum laboriosam reprehenderit saepe. Ad aliquam aspernatur deserunt necessitatibus omnis reprehenderit rerum sapiente tempore. Accusantium asperiores consectetur, deleniti, est eveniet, facere iste nihil quaerat quas qui quo reiciendis unde voluptatem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col l12 s12 m12">
                                <div class="divider"></div>
                                <div>
                                    <h2>Redacta tu opinión</h2>

                                </div>
                            </div>
                            <form class="col s12 l8 offset-l2">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="last_name" type="text" class="validate">
                                        <label for="last_name">Last Name</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--<div class="container">
                    <div class="row">
                        <div class="col l12 s12 m12">
                            <h3 class="demas-cursos">Los clientes que vieron este curso vieron también:</h3>
                        </div>
                        <div id="owl-demo1">
                            <div class="item">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <span class="free label-info">Gratis</span>
                                        <img class="activator" src="img/cursos/css.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">Curso de Php Avanzado<i class="material-icons right" style="font-size: 18px">share</i></span>
                                        <p><a href="#">php</a></p>
                                    </div>
                                    <div class="card-action">
                                        <div class="chip">
                                            <img src="img/perfil.png" alt="Contact Person">
                                            Jane Doe
                                        </div>
                                        <a href="curso-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver curso</a>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <span class="free label-info">Gratis</span>
                                        <img class="activator" src="img/cursos/css.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">Curso de Php Avanzado<i class="material-icons right" style="font-size: 18px">share</i></span>
                                        <p><a href="#">php</a></p>
                                    </div>
                                    <div class="card-action">
                                        <div class="chip">
                                            <img src="img/perfil.png" alt="Contact Person">
                                            Jane Doe
                                        </div>
                                        <a href="curso-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver curso</a>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <span class="free label-info">Gratis</span>
                                        <img class="activator" src="img/cursos/css.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">Curso de Php Avanzado<i class="material-icons right" style="font-size: 18px">share</i></span>
                                        <p><a href="#">php</a></p>
                                    </div>
                                    <div class="card-action">
                                        <div class="chip">
                                            <img src="img/perfil.png" alt="Contact Person">
                                            Jane Doe
                                        </div>
                                        <a href="curso-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver curso</a>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <span class="free label-info">Gratis</span>
                                        <img class="activator" src="img/cursos/css.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">Curso de Php Avanzado<i class="material-icons right" style="font-size: 18px">share</i></span>
                                        <p><a href="#">php</a></p>
                                    </div>
                                    <div class="card-action">
                                        <div class="chip">
                                            <img src="img/perfil.png" alt="Contact Person">
                                            Jane Doe
                                        </div>
                                        <a href="curso-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver curso</a>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <span class="free label-info">Gratis</span>
                                        <img class="activator" src="img/cursos/css.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">Curso de Php Avanzado<i class="material-icons right" style="font-size: 18px">share</i></span>
                                        <p><a href="#">php</a></p>
                                    </div>
                                    <div class="card-action">
                                        <div class="chip">
                                            <img src="img/perfil.png" alt="Contact Person">
                                            Jane Doe
                                        </div>
                                        <a href="curso-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver curso</a>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <span class="free label-info">Gratis</span>
                                        <img class="activator" src="img/cursos/css.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">Curso de Php Avanzado<i class="material-icons right" style="font-size: 18px">share</i></span>
                                        <p><a href="#">php</a></p>
                                    </div>
                                    <div class="card-action">
                                        <div class="chip">
                                            <img src="img/perfil.png" alt="Contact Person">
                                            Jane Doe
                                        </div>
                                        <a href="curso-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver curso</a>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <span class="free label-info">Gratis</span>
                                        <img class="activator" src="img/cursos/css.jpg">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">Curso de Php Avanzado<i class="material-icons right" style="font-size: 18px">share</i></span>
                                        <p><a href="#">php</a></p>
                                    </div>
                                    <div class="card-action">
                                        <div class="chip">
                                            <img src="img/perfil.png" alt="Contact Person">
                                            Jane Doe
                                        </div>
                                        <a href="curso-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver curso</a>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </section>
        </section>
        <?php include "php/footer.php"?>
    </main>
    <?php include "php/script.php"?>
    <script type="text/javascript">
        $('.button-collapse').sideNav('hide');    
    </script>
</body>
</html>