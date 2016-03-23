<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Formando Código</title>

  <?php include "php/head.php"?>
</head>
<body>
    <main>
        <?php include "php/menu.php"?>
        <nav class="light-green">
            <div class="container">
                <div class="row">
                    <div class="nav-wrapper">
                        <div class="col l2">
                            <p>Curso en vivo</p>
                        </div>
                        <div class="col l10">
                            <a href="registro.php" class="btn waves-effect waves-light light-blue">
                               Crea tu cuenta gratis
                            </a>
                        </div>
                        <i class="material-icons">close</i>
                    </div>
                </div>
            </div>
        </nav>
        <?php include "php/slider.php"?>
        <!--star Tutos y Cursos-->
        <section class="cursostutosblog">
            <div class="contenido-tab">
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s12 l4 m4"><a class="active" href="#test1">Cursos</a></li>
                                <li class="tab col s12 l4 m4"><a href="#test2">Tutoriales</a></li>
                                <li class="tab col s12 l4 m4"><a href="#test3">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!--Cursos -->
                    <div id="test1" class="col s12">
                        <div class="col s12 m6 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a class="btn-floating waves-effect hvr-buzz waves-light btn tooltipped light-green compartir activator" data-delay="50" data-tooltip="Compartir"  href="#!"><i class="material-icons">share</i></a>
                                    <img class="activator" src="img/cursos/php.jpg">
                                    <span class="compra label-info">Suscriptores</span>
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator truncate grey-text text-darken-4">Android + Sqlite practico</span>
                                    <p><a href="#">php</a></p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        <img src="img/perfil.png" alt="Contact Person">
                                        Eduardo Reyes
                                    </div>
                                    <a href="curso-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver curso</a>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <span class="compra label-info">Suscriptores</span>
                                    <a class="btn-floating waves-effect hvr-buzz waves-light btn tooltipped light-green compartir activator" data-delay="50" data-tooltip="Compartir"  href="#!"><i class="material-icons">share</i></a>
                                    <img class="activator" src="img/cursos/android.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator truncate grey-text text-darken-4">Android + Sqlite practico</span>
                                    <p><a href="#">php</a></p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        <img src="img/perfil.png" alt="Contact Person">
                                        Eduardo Reyes
                                    </div>
                                    <a href="curso-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver curso</a>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <span class="compra label-info">Suscriptores</span>
                                    <a class="btn-floating waves-effect hvr-buzz waves-light btn tooltipped light-green compartir activator" data-delay="50" data-tooltip="Compartir"  href="#!"><i class="material-icons">share</i></a>
                                    <img class="activator" src="img/cursos/css.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator truncate grey-text text-darken-4">Servicios con Android y Php</span>
                                    <p><a href="#">php</a></p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        <img src="img/perfil.png" alt="Contact Person">
                                        Eduardo Reyes
                                    </div>
                                    <a href="curso-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver curso</a>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <span class="free label-info">Gratis</span>
                                    <a class="btn-floating waves-effect hvr-buzz waves-light btn tooltipped light-green compartir activator" data-delay="50" data-tooltip="Compartir"  href="#!"><i class="material-icons">share</i></a>
                                    <img class="activator" src="img/cursos/java.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator truncate grey-text text-darken-4">Java básico</span>
                                    <p><a href="#">php</a></p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        <img src="img/perfil.png" alt="Contact Person">
                                        Eduardo Reyes
                                    </div>
                                    <a href="curso-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver curso</a>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <span class="free label-info">Gratis</span>
                                    <a class="btn-floating waves-effect hvr-buzz waves-light btn tooltipped light-green compartir activator" data-delay="50" data-tooltip="Compartir"  href="#!"><i class="material-icons">share</i></a>
                                    <img class="activator" src="img/cursos/html5.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator truncate  grey-text text-darken-4">Excel VBA</span>
                                    <p><a href="#">php</a></p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        <img src="img/perfil.png" alt="Contact Person">
                                        Eduardo Reyes
                                    </div>
                                    <a href="curso-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver curso</a>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <span class="free label-info">Gratis</span>
                                    <a class="btn-floating waves-effect hvr-buzz waves-light btn tooltipped light-green compartir activator" data-delay="50" data-tooltip="Compartir"  href="#!"><i class="material-icons">share</i></a>
                                    <img class="activator" src="img/cursos/excel.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator truncate grey-text text-darken-4">Android Básico</span>
                                    <p><a href="#">php</a></p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        <img src="img/perfil.png" alt="Contact Person">
                                        Eduardo Reyes
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
                    <!--Tutoriales -->
                    <div id="test2" class="col s12">
                        <div class="col s12 m6 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a class="btn-floating waves-effect hvr-buzz waves-light btn tooltipped light-green compartir activator" data-delay="50" data-tooltip="Compartir"  href="#!"><i class="material-icons">share</i></a>
                                    <img class="activator" src="img/cursos/android.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4 truncate">Tutorial de carrito de compras con jsp</span>
                                    <p><a href="#">php</a></p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        php
                                    </div>
                                    <a href="ver-tutorial.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver</a>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a class="btn-floating waves-effect hvr-buzz waves-light btn tooltipped light-green compartir activator" data-delay="50" data-tooltip="Compartir"  href="#!"><i class="material-icons">share</i></a>
                                    <img class="activator" src="img/cursos/android.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4 truncate">Tutorial de carrito de compras con jsp</span>
                                    <p><a href="#">php</a></p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        php
                                    </div>
                                    <a href="ver-tutorial.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver</a>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a class="btn-floating waves-effect hvr-buzz waves-light btn tooltipped light-green compartir activator" data-delay="50" data-tooltip="Compartir"  href="#!"><i class="material-icons">share</i></a>
                                    <img class="activator" src="img/cursos/android.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4 truncate">Tutorial de carrito de compras con jsp</span>
                                    <p><a href="#">php</a></p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        php
                                    </div>
                                    <a href="ver-tutorial.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver</a>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a class="btn-floating waves-effect hvr-buzz waves-light btn tooltipped light-green compartir activator" data-delay="50" data-tooltip="Compartir"  href="#!"><i class="material-icons">share</i></a>
                                    <img class="activator" src="img/cursos/android.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4 truncate">Tutorial de carrito de compras con jsp</span>
                                    <p><a href="#">php</a></p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        php
                                    </div>
                                    <a href="ver-tutorial.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver</a>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a class="btn-floating waves-effect hvr-buzz waves-light btn tooltipped light-green compartir activator" data-delay="50" data-tooltip="Compartir"  href="#!"><i class="material-icons">share</i></a>
                                    <img class="activator" src="img/cursos/android.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4 truncate">Tutorial de carrito de compras con jsp</span>
                                    <p><a href="#">php</a></p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        php
                                    </div>
                                    <a href="ver-tutorial.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver</a>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a class="btn-floating waves-effect hvr-buzz waves-light btn tooltipped light-green compartir activator" data-delay="50" data-tooltip="Compartir"  href="#!"><i class="material-icons">share</i></a>
                                    <img class="activator" src="img/cursos/android.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4 truncate">Tutorial de carrito de compras con jsp</span>
                                    <p><a href="#">php</a></p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        php
                                    </div>
                                    <a href="ver-tutorial.php" class="waves-effect waves-light btn leer-mas  light-blue">Ver</a>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog-->
                    <div id="test3" class="col s12">
                        <div class="col s12 l6 m6">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/blog/blog4.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4 truncate">Como implementar un script</span>
                                    <p><a href="#">20/09/2016</a></p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        <img src="img/perfil.png" alt="Contact Person">
                                        Eduardo Reyes
                                    </div>
                                    <a href="blog-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">¡Ver más!</a>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l6 m6">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/blog/blog3.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4 truncate">Como implementar un script</span>
                                    <p><a href="#">20/09/2016</a></p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        <img src="img/perfil.png" alt="Contact Person">
                                        Eduardo Reyes
                                    </div>
                                    <a href="blog-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">¡Ver más!</a>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end tutos y cursos-->
        <!--Star pricing-->
        <section id="precio">
            <div class="container">
                <div class="row">
                    <div class="col m12 s12 l12 center">
                        <h1>Modo de Suscripción</h1>
                        <p>Aprendizaje autónomo y desde donde quieras</p>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="nomprecios light-blue">
                                <h4>Gratis</h4>
                                <h2>$0</h2>
                                <h6 class="light">Cursos gratis.</h6>
                                <h6><a class="" href="#price-free">Detalles</a></h6>
                            </div>
                            <div class="card-content">
                                <ul class="precio-lista">
                                    <li class=""><i class="material-icons">check</i> Descarga un curso premium. Acceso para siempre.</li>
                                    <li class=""><i class="material-icons">check</i> Acceso a actualizaciones mensuales de nuevos cursos</li>
                                    <li class=""><i class="material-icons">check</i> Beca a un estudiante con una suscripción anual *</li>
                                </ul>
                            </div>
                            <div class="card-action center">
                                <a class="waves-effect waves-light btn light-blue" href="suscribete.php"><i class="material-icons right">add</i> SUSCRIBIRME</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="card z-depth-2">
                            <div class="nomprecios light-green">
                                <h4>Mensual</h4>
                                <h2>$30</h2>
                                <h6 class="light">Todos los cursos.</h6>
                                <h6><a class="" href="#price-free">Detalles</a></h6>
                            </div>
                            <div class="card-content">
                                <ul class="precio-lista">
                                    <li class=""><i class="material-icons">check</i> Descarga un curso premium. Acceso para siempre.</li>
                                    <li class=""><i class="material-icons">check</i> Acceso a actualizaciones mensuales de nuevos cursos</li>
                                    <li class=""><i class="material-icons">check</i> Beca a un estudiante con una suscripción anual *</li>
                                </ul>
                            </div>
                            <div class="card-action center">
                                <a class="waves-effect waves-light btn btn-large light-green" href="suscribete.php"><i class="material-icons right">add</i> Suscribirme</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="nomprecios light-blue">
                                <h4>Anual</h4>
                                <h2>$99</h2>
                                <h6 class="light">Todos los cursos + Proyecto</h6>
                                <h6><a class="detalle-link" href="#price-free">Detalles</a></h6>
                            </div>
                            <div class="card-content">
                                <ul class="precio-lista">
                                    <li class=""><i class="material-icons">check</i> Descarga un curso premium. Acceso para siempre.</li>
                                    <li class=""><i class="material-icons">check</i> Acceso a actualizaciones mensuales de nuevos cursos</li>
                                    <li class=""><i class="material-icons">check</i> Beca a un estudiante con una suscripción anual *</li>
                                </ul>
                            </div>
                            <div class="card-action center">
                                <a class="waves-effect waves-light btn light-blue" href="suscribete.php"><i class="material-icons right">add</i> SUSCRIBIRME</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End pricing-->
        <!--star plataformas-->
        <section id="plataformas">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12 center">
                        <h1>Todas las Plataformas</h1>
                        <p>Aprendizaje autónomo y desde donde quieras</p>
                    </div>
                    <div class="col s12 m12 l8 offset-l2">
                        <img src="img/plataformas.png" class="responsive-img" alt="Formando Código en todas las Plataformas"/>
                    </div>
                </div>
            </div>
        </section>
        <!--end plataformas-->
        <!--star testimonios-->
        <section id="testimonios">
            <div class="container">
                <div class="row">
                    <div class="owl-demo">
                        <div class="item">
                            <div class="testimonio-texto">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda deserunt fugit incidunt, itaque magni nisi omnis perferendis rerum voluptatum?</p>
                            </div>
                            <div class="Testimonies-triangle"></div>
                            <div class="testimonio-user">
                                <div class="carousel-img"></div>
                                <div class="user-name">
                                    <div class="calificacion">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                    </div>
                                    <div class="name">Amanda Mayer</div>
                                    <div class="carousel-position"><a href="http://www.gogetthemes.com" target="_blank">Company</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonio-texto">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda deserunt fugit incidunt, itaque magni nisi omnis perferendis rerum voluptatum?</p>
                            </div>
                            <div class="Testimonies-triangle"></div>
                            <div class="testimonio-user">
                                <div class="carousel-img"></div>
                                <div class="user-name">
                                    <div class="calificacion">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                    </div>
                                    <div class="name">Amanda Mayer</div>
                                    <div class="carousel-position"><a href="http://www.gogetthemes.com" target="_blank">Company</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonio-texto">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda deserunt fugit incidunt, itaque magni nisi omnis perferendis rerum voluptatum?</p>
                            </div>
                            <div class="Testimonies-triangle"></div>
                            <div class="testimonio-user">
                                <div class="carousel-img"></div>
                                <div class="user-name">
                                    <div class="calificacion">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_border</i>
                                    </div>
                                    <div class="name">Amanda Mayer</div>
                                    <div class="carousel-position"><a href="http://www.gogetthemes.com" target="_blank">Company</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonio-texto">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda deserunt fugit incidunt, itaque magni nisi omnis perferendis rerum voluptatum?</p>
                            </div>
                            <div class="Testimonies-triangle"></div>
                            <div class="testimonio-user">
                                <div class="carousel-img"></div>
                                <div class="user-name">
                                    <div class="calificacion">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_border</i>
                                    </div>
                                    <div class="name">Amanda Mayer</div>
                                    <div class="carousel-position"><a href="http://www.gogetthemes.com" target="_blank">Company</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonio-texto">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda deserunt fugit incidunt, itaque magni nisi omnis perferendis rerum voluptatum?</p>
                            </div>
                            <div class="Testimonies-triangle"></div>
                            <div class="testimonio-user">
                                <div class="carousel-img"></div>
                                <div class="user-name">
                                    <div class="calificacion">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                    </div>
                                    <div class="name">Amanda Mayer</div>
                                    <div class="carousel-position"><a href="http://www.gogetthemes.com" target="_blank">Company</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end testimonios-->
        <?php include "php/footer.php"?>
    </main>
    <?php include "php/script.php"?>
  </body>
</html>
