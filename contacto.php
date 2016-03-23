<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <?php include "php/head.php"?>
</head>
<body>
    <main>
        <?php include "php/menu.php"?>
        <section class="contacto-banner">
            <div class="container">
                <div class="col l12 center">
                    <h4 class="titulo-banner">CONTÁCTANOS</h4>
                    <p class="subtitulo-banner">Te ayudaremos con tu duda</p>
                </div>
            </div>
        </section>
        <section class="contacto">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12 m12">
                        <div class="section-common-space">
                            <h2 class="title-sec">Dejanos un mensaje:</h2>
                            <div class="contact-info">
                                <div class="clearfix ci-items">
                                    <span class="ci-icons"><i class="fa fa-home"></i></span>
                                    <h6>1600 Amphitheatre Parkway, Mountain View, CA 94043, US</h6>
                                </div>
                                <div class="clearfix ci-items">
                                    <span class="ci-icons"><i class="fa fa-envelope"></i></span>
                                    <h6>info@coderpixel.com</h6>
                                </div>
                                <div class="clearfix ci-items">
                                    <span class="ci-icons"><i class="fa fa-phone"></i></span>
                                    <h6>0088 1234 567890</h6>
                                </div>
                                <div class="clearfix ci-items">
                                    <span class="ci-icons"><i class="fa fa-globe"></i></span>
                                    <h6>www.coderpixel.com</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l6 s12 m12">
                        <div class="formulario">
                            <form>
                                <div class="input-field col s12 l6 m12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email" data-error="wrong" data-success="right">Nombre</label>
                                </div>
                                <div class="input-field col s12 l6 m12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email" data-error="wrong" data-success="right">Apellido</label>
                                </div>
                                <div class="input-field col s12 l12 m12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email" data-error="wrong" data-success="right">Email</label>
                                </div>
                                <div class="input-field col s12 m12 l12">
                                    <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                                    <label for="icon_prefix2">Mensaje</label>
                                </div>
                                <div class="input-field col s12">
                                    <button class="waves-effect waves-light btn disabled b btn-large">Enviar</button>
                                </div>
                            </form>
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