<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>
            Equipo | Formando Código
        </title>
        <?php include "php/head.php" ?>
    </head>
    <body>
        <main>
            <?php include "php/menu.php" ?>
            <!--
                <section class="equipo-banner">
                    <div class="container">
                        <div class="col l12 center">
                            <h4 class="titulo-banner">
                                NOS GUSTA COMPARTIR
                            </h4>
                            <p class="subtitulo-banner">
                                Contigo, Gracias por estar aquí
                            </p>
                        </div>
                    </div>
                </section>
            -->
            <section class="contenido-profesores">
                <div class="container">
                    <div class="row">
                        <div class="col m12 l12 s12 center">
                            <h2>
                                Registrate ahora!
                            </h2>
                            <span class="texto-profesores">
                                Aprende con los cursos gratuitos que tenemos para ti
                            </span>
                            <br/>
                        </div>
                        <div class="col l6 offset-l3 offset-m3 m6 s12">
                            <div class="card-panel white">
                                <div class="row">
                                    <div class="col s12 input-field center">
                                        <a class="waves-effect waves-light btn blue darken-4">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                        <a class="waves-effect blue waves-light btn">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                        <a class="waves-effect red darken-4 waves-light btn">
                                            <i class="fa fa-google-plus">
                                            </i>
                                        </a>
                                    </div>
                                    <div class="col s12 input-field center">
                                        <div class="divider"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="s12 center input-field">
                                        <span class="social-grey-text">
                                            O registrate con tu email
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="name" autofocus="autofocus" type="text" class="validate"/>
                                                <label for="name">
                                                    Nombres
                                                </label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="apellidos" type="text" class="validate"/>
                                                <label for="apellidos">
                                                    Apellidos
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" class="validate"/>
                                                <label for="email">
                                                    Email
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="password" type="password" class="validate"/>
                                                <label for="password">
                                                    Contraseña
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="password_confirmation" type="password" class="validate"/>
                                                <label for="password_confirmation">
                                                    Repetir contraseña
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 input-field left">
                                                <input type="checkbox" class="blue" id="test5" />
                                                <label for="test5">
                                                    He leído y acepto los <a class="#">términos y condiciones</a> y la <a href="#">política de privacidad</a>.
                                                </label>
                                            </div>
                                            <div class="col s12 input-field center">
                                            <br>
                                            <br>
                                            </div>
                                            <div class="col s12 input-field center">
                                                <button type="button" class="btn waves-effect waves-light light-blue">
                                                    <i class="material-icons right">
                                                        send
                                                    </i>
                                                    REGISTRARME
                                                </button>
                                            </div>
                                            <div class="col s12 input-field center">
                                                <a href="#">
                                                    ¿Ya estás registrado? Entrar!
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php include "php/footer.php" ?>
        </main>
        <?php include "php/script.php" ?>
    </body>
</html>
