<!-- <?php //include 'backend/connection.php'; if(!isset($_SESSION['token'])){header('Location: login.php');}?> -->

<?php
require_once 'backend/includes/config_session.inc.php';
require_once 'backend/index_view.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="IMG/Logo-Sportix.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!--Fonts Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Playfair+Display:wght@500&family=Poppins:wght@300&family=Roboto&family=Roboto+Condensed&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Martian+Mono:wght@300&family=Playfair+Display:wght@500&family=Poppins:wght@300&family=Roboto&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
    <!---->

    <title>Sportix</title>

    <link rel="stylesheet" href="STYLE/help.css">

    <?php
    check_register_success();
    check_confirm();
    ?>
</head>

<body>
    <?php require('LAYOUT/header.php'); ?>

    <nav>
        <a href="#home">Como comprar</a>
        <a href="#about">Devoluciones</a>
        <a href="#services">Termino y condiciones</a>
        <a href="#contact">Contactos</a>
    </nav>

    <section id="home">

        <div class="grid-container">
            <h2 class="item1 tracking-in-expand-fwd-top">Como comprar</h2>
            <div class="item2">
                <h3>1. Registrece o inicie sesion en nuestro sitio web</h3>
                <p>Tiene que iniciar sesion o registrarse para poder comprar o ponerlo en el carrito</p>
                <h3>2. Investiga nuestro productos</h3>
                <p>Investiga nuestros productos y agregalo en el carrito</p>
                <h3>3. Pone tus datos de dirreción</h3>
                <p>Cuando queres comprar el/los producto/s tenes que poner la dirreción del lugar que quieras recibir
                </p>
                <h3>4. El metodo de envio</h3>
                <p>Seleciona el metodo de envio como Correo Argentino a SUCURSAL, Correo Argentino a DOMICILIO, Retiro
                    en el
                    Local, etc</p>
                <h3>5. Selecciona el metodo de pago</h3>
                <p>Tienes que elegir con que medio de pago queres pagarlo, aceptamos Tarjeta de Credito/Debito, Efectivo
                    en
                    el local y Mercado pago</p>
                <h3>6. Revisa tu email</h3>
                <p>Por último, recibirás en tu casilla de correo electrónico un mail de confirmación con tu número de
                    pedido. Y una vez que se acredite el pago, recibirás otro correo para informarte de que tu pedido ha
                    sido enviado.</p>
            </div>
            <div class="item3"><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.621048590337!2d-58.38953392522083!3d-34.71473687291472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccd393d950e51%3A0x4b28fad07877b4f0!2sEEST%20N%C2%B0%205%20%22John%20F.%20Kennedy%22!5e0!3m2!1ses-419!2sar!4v1697220931406!5m2!1ses-419!2sar"
                    width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p>Lugar en donde estamos</p>
            </div>
        </div>

    </section>

    <section id="about">
        <h2 class="tracking-in-expand-fwd-top">Devoluciones</h2>
        <h3>Precencial</h3>
        <li>Sportix Store ofrece hasta 30 días siguientes a la recepción de la compra para devoluciones en todas las
            compras
            en línea. <br></li>

        <li>Todos los productos tendrán que ser devueltos en las mismas condiciones en que fueron adquiridos y dentro de
            un envoltorio opaco, bien cerrado que no se vea su interior y que anote en la parte externa del envoltorio
            el número de tracking. <br></li>

        <li>No es posible hacer devoluciones en medias, ropa interior, ni trajes de baño, por motivos de seguridad e
            higiene. <br></li>

        <li>Ten en cuenta que al haber alta demanda de devoluciones, puede que haya un ligero retraso al recibir tu
            reembolso.</li>

        <h3>Online</h3>

        <p>Los cambios deben ser solicitados por medio de un mail. Para esto el
            usuario debe enviar un email a sportixchic@gmail.com. Ahi debe informar del cambio solicitado indicando
            los
            siguientes datos:</p>

        <li>Nombre y Apellido:</li>
        <li>Email:</li>
        <li>Número de pedido:</li>
        <li>Código del producto que querés cambiar:</li>
        <li>Código del producto nuevo:</li>
        <li>Talle:</li>
        <li>Motivo del cambio:</li>
        <li>Dirección completa:</li>

        <p>Una vez acreditado el pago del costo de cambio y nueva entrega, OCA pasará por tu domicilio a retirar el
            producto a cambiar. Una vez revisado el perfecto estado del mismo, te entregarán el nuevo pedido.</p>

        <div id="container-volver">
            <a href="#home">
                <img src="IMG/arrow-circle-up.svg">
            </a>
        </div>
    </section>

    <section id="services">
        <h2 class="tracking-in-expand-fwd-top">Términos y Condiciones</h2>
        <h3>¡Bienvenido a Sportix!</h3>

        <p>Estos términos y condiciones describen las reglas y regulaciones para el uso del sitio web de Sportix,
            ubicado
            en sportix.jfk.
            <br><br>

            Al acceder a este sitio web, asumimos que acepta estos términos y condiciones. No continúe usando Sportix si
            no
            acepta tomar todos los términos y condiciones establecidos en esta página. <br>
            <br>

            La siguiente terminología se aplica a estos Términos y Condiciones, Declaración de Privacidad y Aviso de
            Descargo de Responsabilidad y todos los Acuerdos: "Cliente", "Usted" y "Su" se refiere a usted, la persona
            inicia sesión en este sitio web y cumple con los términos y condiciones de la Empresa. "La Compañía",
            "Nosotros
            mismos", "Nosotros", "Nuestro" y "Nuestros", se refiere a nuestra Compañía. "Partido", "Partes" o
            "Nosotros", se
            refiere tanto al Cliente como a nosotros mismos. Todos los términos se refieren a la oferta, aceptación y
            consideración del pago necesario para emprender el proceso de nuestra asistencia al Cliente de la manera más
            adecuada con el propósito expreso de satisfacer las necesidades del Cliente con respecto a la prestación de
            los
            servicios declarados de la Compañía, de acuerdo con y sujeto a la ley vigente de ar.Cualquier uso de la
            terminología anterior u otras palabras en singular, plural, capitalización y / o él / ella o ellos, se toman
            como intercambiables y, por lo tanto, se refieren a las mismas.
        </p>

        <button>
            <a href="ter-y-cond.html">
                <span>Seguir</span>
            </a>
        </button>

        <div id="container-volver">
            <a href="#home">
                <img src="IMG/arrow-circle-up.svg">
            </a>
        </div>
    </section>

    <section id="contact">
        <div class="container-contactos">
            <h2 class="subtitulo tracking-in-expand-fwd-top">Contactos</h2>
            <div class="brian">
                <h2>Brian Olesnievicz</h2>
                <h3>Estudiante de la escuela J.F.K.</h3>
                <p>Soy un estudiante que aspira a trabajar con una ingenieria enfocada en la Ciencia de Datos.
                    Me encargue del Backend de la pagina, los lenguajes de los cuales poseo experiencia previa son:
                </p>
                <li>PHP</li>
                <li>JAVA</li>
                <li>JS</li>
                <li>PYTHON</li>
                <li>LUA</li>
                <li>C#</li>
                <li>LARAVELL (Framework)</li>
            </div>
            <div class="reyno">
                <h2>Joaquin Reynoso</h2>
                <h3>Estudiante de la escuela J.F.K.</h3>
                <p>Soy un gran estudiante que fui a un torneo de matematicas, no me cuesta aprender otros lenguajes y
                    los lenguajes que se son:
                </p>
                <li>C# (BackEnd)</li>
                <li>PYTHON (Fullstack)</li>
                <li>HTML (FrontEnd)</li>
                <li>CSS (FrontEnd)</li>
            </div>
            <div class="tito">
                <h2>Valentin Tito</h2>
                <h3>Estudiante de la escuela J.F.K.</h3>
                <p>Soy delegado de mi curso, aspiro a trabajar de FrontEnd, no me resulta dificil aprender otros
                    lenguajes
                    tanto de FrontEnd y de BackEnd y los lenguajes que se son:
                </p>
                <li>HTML</li>
                <li>CSS</li>
                <li>C#</li>
                <li>Bootstrap</li>
            </div>
        </div>
    </section>
    <div id="container-volver">
        <a href="#home">
            <img src="IMG/arrow-circle-up.svg">
        </a>
    </div>
</body>

</html>