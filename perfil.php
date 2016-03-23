<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cursos | Formando Código</title>
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
                                <a href="#!" class="breadcrumb">Usuario</a>
                                <a href="#!" class="breadcrumb">Perfil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        <section class="perfil">
            <div class="container">
                <div class="row">
                    <div class="col l12 m12 s12">
                        <div class="card">
                            <div class="card-content light-blue darken-2 white-text">
                                <div class="row">
                                    <div class="col l2 m12 s12">
                                        <div class="imagen-perfil">
                                            <img src="img/perfil-2.png" class="responsive-img" alt="">
                                        </div>
                                    </div>
                                    <div class="col l8">
                                        <div class="descripcion-perfil">
                                            <span class="card-title">Cesar Acuña Palacios</span>
                                            <p>Soy un buen candidato ala presidencia yo tengo plata como cancha.</p>
                                            <ul class="user_stats">
                                                <li>
                                                    <h4 class="heading_a">123 <span class="sub-heading">cursos vistos</span></h4>
                                                </li>
                                                <li>
                                                    <h4 class="heading_a">120 <span class="sub-heading">Photos</span></h4>
                                                </li>
                                                <li>
                                                    <h4 class="heading_a">284 <span class="sub-heading">Following</span></h4>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col l2">
                                        <div class="editar">
                                            <a class="btn-floating btn-large waves-effect waves-light light-green"><i class="material-icons">mode_edit</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <ul class="tabs">
                                            <li class="tab col s3"><a class="active" href="#test1">Mis Datos</a></li>
                                            <li class="tab col s3"><a href="#test2">Mis  cursos</a></li>
                                            <li class="tab col s3"><a href="#test3">Mis Notas</a></li>
                                        </ul>
                                    </div>
                                    <div id="test1" class="col s12">
                                        <div class="col l12">
                                            <div class="avance">
                                                <p>Ullam vel optio ipsum rerum eum in modi pariatur in possimus perferendis et nihil delectus officia ut voluptatem ut consequuntur veniam quod nihil ducimus debitis eveniet dolorem quis atque architecto sequi ipsum eos repudiandae vel sequi qui qui id fugiat accusamus corrupti nulla nihil sit nemo enim id nihil incidunt quibusdam sint culpa incidunt id eius occaecati quaerat libero est ea aliquam impedit tempora quaerat maiores aut aspernatur qui maiores voluptas quaerat nihil quam saepe quae qui est ex doloremque dolorum .</p>
                                            </div>
                                        </div>
                                        <div class="col l5">
                                            <div class="avance">
                                                <h6>Info Contacto</h6>
                                                <div class="avance-item">
                                                    <i class="fa fa-envelope"></i>
                                                    <div class="avance-item-nombre">
                                                        <span class="nombre">info@milagros.com</span>
                                                        <br>
                                                        <span class="subnombre">Email</span>
                                                        <div class="divider"></div>
                                                    </div>
                                                </div>
                                                <div class="avance-item">
                                                    <i class="fa fa-phone"></i>
                                                    <div class="avance-item-nombre">
                                                        <span class="nombre">991234876</span>
                                                        <br>
                                                        <span class="subnombre">Teléfono</span>
                                                        <div class="divider"></div>
                                                    </div>
                                                </div>
                                                <div class="avance-item">
                                                    <i class="fa fa-facebook-official"></i>
                                                    <div class="avance-item-nombre">
                                                        <span class="nombre">www.facebook.com/formandcodigo</span>
                                                        <br>
                                                        <span class="subnombre">Facebook</span>
                                                        <div class="divider"></div>
                                                    </div>
                                                </div>
                                                <div class="avance-item">
                                                    <i class="fa fa-twitter"></i>
                                                    <div class="avance-item-nombre">
                                                        <span class="nombre">www.twitter.com/formandocodigo</span>
                                                        <br>
                                                        <span class="subnombre">Email</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col l6">
                                            <div class="avance">
                                                <h6>Mis Cursos</h6>
                                                <div class="curso-avance">
                                                    <a href="">Lorem ipsum.</a>
                                                    <br>
                                                    <span>234 Miembros</span>
                                                    <div class="divider"></div>
                                                </div>
                                                <div class="curso-avance">
                                                    <a href="">Lorem ipsum dolor sit.</a>
                                                    <br>
                                                    <span>234 Miembros</span>
                                                    <div class="divider"></div>
                                                </div>
                                                <div class="curso-avance">
                                                    <a href="">Lorem ipsum dolor.</a>
                                                    <br>
                                                    <span>234 Miembros</span>
                                                    <div class="divider"></div>
                                                </div>
                                                <div class="curso-avance">
                                                    <a href="">HR Professionals Association - Human Resour.</a>
                                                    <br>
                                                    <span>234 Miembros</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="test2" class="col s12">Test 2</div>
                                    <div id="test3" class="col s12">Test 3</div>
                                </div>
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
