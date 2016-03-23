<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog | Formando Código</title>
    <?php include "php/head.php"?>
</head>
<body>
<main>
    <?php include "php/menu.php"?>
    <section class="blog-detalle-banner">
        <div>
        <div class="container">
           <div class="row">

                   <div class="col l9 left">
                       <div>
                           <h4>Aprende a usar objetos inteligentes en Photoshop</h4>
                           <div class="clearfix post-meta">
                               <span>Por <a href="#">César Cueva M.</a></span>
                               <span>Marzo 20, 2016</span>
                               <span class="cm">5 Comentarios</span>
                               <span><a href="#">UX Design</a></span> </div>
                       </div>
                   </div>
                   <div class="col l3 right">
                       <ul class=" social share-social">
                           <li><a href=""><i class="fa fa-facebook"></i><span>12</span></a></li>
                           <li><a href=""><i class="fa fa-twitter"></i><span>5</span></a></li>
                           <li><a href=""><i class="fa fa-google-plus"></i><span>0</span></a></li>
                       </ul>
                   </div>

           </div>

        </div>
            </div>
    </section>
    <section class="blog-detalle">
        <div class="container">
            <div class="row">
                <div class="col s12 m8 l9 contenido-blog">
                    <div class="col l12 s12 m12">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator responsive-img" src="img/blog.jpg">
                        </div>
                        <div class="card-content">
                            <div class="">
                                <p class="caption">Conforme vamos avanzando en el manejo y la edición de imágenes en Photoshop nos
                                    surgen preguntas como ¿Será que si reduzco y amplío la imagen esta pierde calidad?
                                    ¿Cómo puedo agrupar varias capas en una sola para editarlas todas al tiempo? ¿Puedo
                                    incrustar archivos vectoriales y que no pierdan sus propiedades de edición? la respuesta
                                    a estas y otras preguntas es simple: objetos inteligentes.</p>
                                <h2>¿Pero qué son los objetos inteligentes?</h2>
                                <p  class="caption">Son capas especiales que contienen la información de una imagen compleja. Es decir,
                                    una imagen compuesta por varias capas o elementos vectoriales. Los objetos inteligentes
                                    nos permiten conservar todas sus características originales; de forma que hacen posible
                                    una edición no destructiva de la capa en cuestión.</p>
                                <pre style="max-height: 300px; overflow: scroll" class="card"><code class="language-css">#blog{
padding: 30px 0px;
    .contenido-blog{
        .caption{
            font-size: 1.25em;
            font-weight: 300;
            font-family: "Roboto", sans-serif;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .icono-usuario{
            img{
                width: 50px;
                height: 50px;
                margin-right: 15px;
            }
        }
        .titulo-blog{
            line-height: 20px;
            font-weight: 400;
            font-family: "Roboto", sans-serif;
            font-size: 20px;
        }
        h2{
            font-size:2.3em;
        }
    }
}</code>
                                </pre>
                                <h2>¿Pero qué son los objetos inteligentes?</h2>
                                <p  class="caption">Son capas especiales que contienen la información de una imagen compleja. Es decir,
                                    una imagen compuesta por varias capas o elementos vectoriales. Los objetos inteligentes
                                    nos permiten conservar todas sus características originales; de forma que hacen posible
                                    una edición no destructiva de la capa en cuestión.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l7 s12 m3">
                        <h6>Compartir</h6>
                    </div>
                    <div class="col l5 s12 m9 right">
                        <ul class=" social share-social">
                            <li><a href=""><i class="fa fa-facebook"></i><span>12</span></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i><span>5</span></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i><span>0</span></a></li>
                        </ul>
                    </div>

                    <div class="col l12 s12 m12 left-align">
                        <h2>4 Comentarios</h2>
                        <div class="card-panel hoverable">
                                <img src="img/profesores.jpg" class="icono-usuario" alt="">
                                <div class="comentario-usuario">
                                    <a href="">Jesús Alzamara</a>
                                    <div class="date">October 24, 2015 at 07.50 am</div>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                </div>
                        </div>
                        <div class="card-panel hoverable">
                            <img src="img/profesores.jpg" class="icono-usuario" alt="">
                            <div class="comentario-usuario">
                                <a href="">Jesús Alzamara</a>
                                <div class="date">October 24, 2015 at 07.50 am</div>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                        <div class="card-panel hoverable">
                            <img src="img/profesores.jpg" class="icono-usuario" alt="">
                            <div class="comentario-usuario">
                                <a href="">Jesús Alzamara</a>
                                <div class="date">October 24, 2015 at 07.50 am</div>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col m12 s12 m12">
                        <h2>Comentar</h2>
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
                <div class="col s12 m4 l3">
                    <div class="sidebar">
                        <aside class="white-box widget">
                            <h3 class="widget-title">RECENT POSTS</h3>
                            <div class="widget-text">
                                <ul class="recent-posts">
                                    <li class="recent-item">
                                        <a href="single.html">GENERAL BLOG POST</a>
                                        <span><time datetime="2015-10-24">October 24, 2015</time></span>
                                    </li>
                                    <li class="recent-item">
                                        <a href="single-slider.html">POST WITH IMAGE SLIDE</a>
                                        <span><time datetime="2015-10-24">October 16, 2015</time></span>
                                    </li>
                                    <li class="recent-item">
                                        <a href="single-video.html">WE SUPPORT YOUR CUSTOM VIDEO</a>
                                        <span><time datetime="2015-10-24">October 9, 2015</time></span>
                                    </li>
                                    <li class="recent-item">
                                        <a href="single-audio.html">UPDATE POST WITH AUDIO</a>
                                        <span><time datetime="2015-10-24">October 9, 2015</time></span>
                                    </li>
                                    <li class="recent-item">
                                        <a href="single-video-youtube.html">POST WITH YOUTUBE VIDEO</a>
                                        <span><time datetime="2015-10-24">September 30, 2015</time></span>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="white-box widget">
                            <h3 class="widget-title">CATEGORIES</h3>
                            <ul>
                                <li><a href="#">Google Design</a></li>
                                <li><a href="#">UX Design</a></li>
                                <li><a href="#">UI Design</a></li>
                                <li><a href="#">UI Design</a></li>
                                <li><a href="#">Flat Design</a></li>
                            </ul>
                        </aside>
                        <aside class="white-box widget">
                            <h3 class="widget-title">ARCHIVE</h3>
                            <ul>
                                <li><a href="#">September 2015</a></li>
                                <li><a href="#">October 2015</a></li>
                                <li><a href="#">November 2015</a></li>
                                <li><a href="#">December 2015</a></li>
                                <li><a href="#">January 2016</a></li>
                            </ul>
                        </aside>
                        <aside class="white-box widget">
                            <h3 class="widget-title">TAGS</h3>
                            <div class="clearfix tagcloud">
                                <a href="#">Awesome</a>
                                <a href="#">Blog</a>
                                <a href="#">Coderpixel</a>
                                <a href="#">Creative</a>
                                <a href="#">MatX</a>
                                <a href="#">Google Design</a>
                                <a href="#">Material Design</a>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col l12 s12 m12">
                    <div class="col l12 s12  m12">
                        <h2 style="font-size: 20px">Post Relacionados</h2>
                    </div>
                    <div class="col l4 m6 s12">
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
                        </div>
                    </div>
                    <div class="col l4 m6 s12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/blog/blog4.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4 truncate">Como implementar un script en html</span>
                                <p><a href="#">20/09/2016</a></p>
                            </div>
                            <div class="card-action">
                                <div class="chip">
                                    <img src="img/perfil.png" alt="Contact Person">
                                    Eduardo Reyes
                                </div>
                                <a href="blog-detalle.php" class="waves-effect waves-light btn leer-mas  light-blue">¡Ver más!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col l4 m6 s12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/blog/blog5.jpg">
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
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </main>
    <?php include "php/footer.php"?>
</body>
<?php include "php/script.php"?>
</html>