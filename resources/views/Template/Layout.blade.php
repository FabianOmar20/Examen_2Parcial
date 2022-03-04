<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Cliente-Servidor</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
</head>
<body>
    <div id="wrap">

        <div id="header">
           <center> <h1><a href="#">Cliente-Servidor</a></h1>
            <h2>Todo sobre esta arquitectura en la palma de tu mano</h2> </center>
        </div>

        <div id="menu">
            <ul>
                <li><a href="{{Route('Unidad1')}}">Unidad 1</a></li>
                <li><a href="{{Route('Unidad2')}}">Unidad 2</a></li>
                <li><a href="#">Cliente</a></li>
                <li><a href="#">Servidor</a></li>
            </ul>
        </div>

        <div id="content">

            <!--<div class="left">

                <h2><a href="#">License and terms of use</a></h2>
                Square is a CSS template that is free and fully standards compliant. <a
                    href="http://www.free-css-templates.com/">Free CSS templates</a> designed this template.
                This template is allowed for all uses, including commercial use, as it is released under the
                <strong>Creative Commons Attributions 2.5</strong> license. The only stipulation to the use of this free
                template is that the links appearing in the footer remain intact. Beyond that, simply enjoy and have fun
                with it!
                <br /><br />
                <img src="images/pic.jpg" alt="Example pic" style="border: 3px solid #ccc;" />
                <br /><br />
                Donec nulla. Aenean eu augue ac nisl tincidunt rutrum. Proin erat justo, pharetra eget, posuere at,
                malesuada
                et, nulla. Donec pretium nibh sed est faucibus suscipit. Nunc nisi. Nullam vehicula. In ipsum lorem,
                bibendum sed,
                consectetuer et, gravida id, erat. Ut imperdiet, leo vel condimentum faucibus, risus justo feugiat
                purus, vitae
                congue nulla diam non urna.

                <h2><a href="#">Title with a link - Example of heading 2</a></h2>
                Donec nulla. Aenean eu augue ac nisl tincidunt rutrum. Proin erat justo, pharetra eget, posuere at,
                malesuada
                et, nulla. Donec pretium nibh sed est faucibus suscipit. Nunc nisi. Nullam vehicula. In ipsum lorem,
                bibendum sed,
                consectetuer et, gravida id, erat. Ut imperdiet, leo vel condimentum faucibus, risus justo feugiat
                purus, vitae
                congue nulla diam non urna.
            </div>
            -->

            @yield('Contenido1')
            @yield('Contenido2')

            <div class="right">

                <h2>Unidad 1 :</h2>
                <ul>
                    <li><a href="{{Route('Unidad1')}}">Conceptos de sistemas de información.</a></li>
                    <li><a href="{{Route('Unidad1')}}">La evolución de los sistemas de información.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Conceptos de cliente y servidor.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Los sistemas de computadoras centrales y dedicadas.</a></li>
                    <li><a href="{{Route('Unidad1')}}">los sistemas de conexión libre y a través de redes.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Los sistemas con arquitectura Cliente/Servidor.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Protocolos de comunicación en red.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Clasificación de los sistemas de información de acuerdo a su arquitectura.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Explicar el proceso de diagramación de componentes de la arquitectura Cliente/Servidor.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Reconocer los componentes del modelo Cliente/Servidor</a></li>
                    <li><a href="{{Route('Unidad1')}}">El concepto de programa maestro. </a></li>
                    <li><a href="{{Route('Unidad1')}}">Los procesos y tareas del programa maestro.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Describir los tipos de servidores.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Reconocer las características de la arquitectura  Cliente/Servidor: servicios, recursos compartidos, protocolos asimétricos, independencia de la ubicación, compatibilidad de clientes y servidores, comunicación de mensajes, encapsulación de servicios, escalabilidad e integridad.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Ventajas y desventajas de la arquitectura  Cliente/Servidor .</a></li>
                    <li><a href="{{Route('Unidad1')}}">Concepto de cómputo en la nube.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Los conceptos de Infrastructure as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS).</a></li>
                    <li><a href="{{Route('Unidad1')}}">Describir la arquitectura  Cliente/Servidor  con los modelos de cómputo en la nube IAAS, PAAS, SAAS.</a></li>
                    
                </ul>

                <h2>Unidad 2</h2>
                <ul>
                    <li><a href="{{Route('Unidad2')}}">Reconocer los conceptos de presentación distribuida, presentación remota, lógica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas.</a></li>
                    <li><a href="{{Route('Unidad2')}}">Definir los conceptos de lógica de acceso, presentación y negocio a datos. </a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso de diseño de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación. </a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso de desarrollo de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación. </a></li>
                    <li><a href="{{Route('Unidad2')}}">El concepto de nivel vinculado a programación web.</a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso de planificación en dos niveles. </a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso de planificación en tres niveles.</a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso de planificación multiniveles.</a></li>
                    <li><a href="{{Route('Unidad2')}}">Identificar problemas de actualización y mantenimiento de aplicaciones multinivel.</a></li>
                    <li><a href="{{Route('Unidad2')}}">Los conceptos de modelo, control y vista, en las arquitecturas Cliente/Servidor.7</a></li>
                    <li><a href="{{Route('Unidad2')}}">El concepto del Modelo Vista Controlador (MVC) en las arquitecturas  Cliente/Servidor.</a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso de flujo de control a partir del MVC, en las arquitecturas  Cliente/Servidor. </a></li>
                    <li><a href="{{Route('Unidad2')}}">El desarrollo de software a partir del MVC, en las arquitecturas Cliente/Servidor.</a></li>
                    <li><a href="{{Route('Unidad2')}}">El concepto de comunicación orientada a conexión e interfaz de programación de aplicaciones (API).</a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso de comunicación y configuración orientada a conexión e interfaz de programación de aplicaciones (API).</a></li>
                    <li><a href="{{Route('Unidad2')}}">El concepto de sockets.</a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso del uso de sockets en aplicaciones Cliente/Servidor.</a></li>
                </ul>

            </div>

            <div style="clear: both;"> </div>

    
    
    
        </div>

        <div id="footer">
            <h3>Gracias por visitar este blog</h3>
        </div>

    </div>
</body>
</html>