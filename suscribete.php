<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Suscribete | Formando Código</title>
    <?php include "php/head.php"?>
</head>
<body>
    <main>
        <?php include "php/menu.php"?>
        <section class="contenido-profesores">
        <div class="container">
            <div class="row">
                <div class="col l12 offset-m3 m6 s12">
                    <div class="card-panel white">
                        <div class="row">
                            <div class="col s12">
                                <ul class="tabs" style="overflow: hidden;">
                                    <li class="tab col s12 l4 m4"><a class="active" href="#test1">USUARIO</a></li>
                                    <li class="tab col s12 l4 m4"><a href="#test2">DATOS DE FACTURACIÓN</a></li>
                                    <li class="tab col s12 l4 m4"><a href="#test3">PAGAR</a></li>
                                    <li class="tab col s12 l4 m4"><a href="#test4">TERMINO</a></li>
                                </ul>
                                <br>
                            </div>
                            <div class="col s12 input-field center">
                                <a class="waves-effect waves-light btn blue darken-4">
                                    <i class="fa fa-facebook">
                                    </i>
                                    Facebook
                                </a>
                                <a class="waves-effect blue waves-light btn">
                                    <i class="fa fa-twitter">
                                    </i>
                                    twitter
                                </a>
                                <a class="waves-effect red darken-4 waves-light btn">
                                    <i class="fa fa-google-plus">
                                    </i>
                                    google plus
                                </a>
                            </div>
                            <div class="col s12 input-field center">
                                <br>
                                <div class="divider"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="test1" class="col s12">
                               <form class="col l5 offset-l1">
                                   <div class="row">
                                       <div class="col l12 s12 m12">
                                           <h4 style="font-size: 23px; font-weight: 600">Ya tengo una cuenta de usuario.</h4>
                                       </div>
                                       <div class="input-field col s12">
                                           <input id="email" autofocus="autofocus" type="email" class="validate">
                                           <label for="email">Email</label>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="input-field col s12">
                                           <input id="password" type="password" class="validate">
                                           <label for="password">Contraseña</label>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col s12 input-field center">
                                           <a href="#">¿Olvidastes tu contraseña?</a>
                                       </div>
                                       <div class="col s12 input-field center">
                                           <button type="button" class="btn waves-effect waves-light light-blue"><i class="material-icons right">send</i> INGRESAR AHORA</button>
                                       </div>
                                   </div>
                            </form>
                                <div class="col l4 offset-l1 s12 m6">
                                    <div class="row">
                                        <div class="col l12 m12 s12">
                                            <div class="primera-sus">
                                                <h4>Es mi primera compra</h4>
                                                <p>Crea tu cuenta de usuario en solo un paso y empieza a aprender inmediatamente.</p>
                                                <button type="button" class="btn waves-effect waves-light light-blue">REGISTRATE AHORA</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col l12 m12 s12">
                                <div class="divider"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col l12 s12 m12 center">
                                <span>Formas de pago:</span>
                                <ul class="pagos">
                                    <li><a href="#" class="iconos visa"></a></li>
                                    <li><a href="#" class="iconos mastercard"></a></li>
                                    <li><a href="#" class="iconos express"></a></li>
                                    <li><a href="#" class="iconos paypal"></a></li>
                                </ul>
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