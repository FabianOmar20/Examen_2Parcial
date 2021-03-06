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
                    <li><a href="{{Route('Unidad1')}}">Conceptos de sistemas de informaci??n.</a></li>
                    <li><a href="{{Route('Unidad1')}}">La evoluci??n de los sistemas de informaci??n.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Conceptos de cliente y servidor.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Los sistemas de computadoras centrales y dedicadas.</a></li>
                    <li><a href="{{Route('Unidad1')}}">los sistemas de conexi??n libre y a trav??s de redes.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Los sistemas con arquitectura Cliente/Servidor.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Protocolos de comunicaci??n en red.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Clasificaci??n de los sistemas de informaci??n de acuerdo a su arquitectura.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Explicar el proceso de diagramaci??n de componentes de la arquitectura Cliente/Servidor.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Reconocer los componentes del modelo Cliente/Servidor</a></li>
                    <li><a href="{{Route('Unidad1')}}">El concepto de programa maestro. </a></li>
                    <li><a href="{{Route('Unidad1')}}">Los procesos y tareas del programa maestro.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Describir los tipos de servidores.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Reconocer las caracter??sticas de la arquitectura  Cliente/Servidor: servicios, recursos compartidos, protocolos asim??tricos, independencia de la ubicaci??n, compatibilidad de clientes y servidores, comunicaci??n de mensajes, encapsulaci??n de servicios, escalabilidad e integridad.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Ventajas y desventajas de la arquitectura  Cliente/Servidor .</a></li>
                    <li><a href="{{Route('Unidad1')}}">Concepto de c??mputo en la nube.</a></li>
                    <li><a href="{{Route('Unidad1')}}">Los conceptos de Infrastructure as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS).</a></li>
                    <li><a href="{{Route('Unidad1')}}">Describir la arquitectura  Cliente/Servidor  con los modelos de c??mputo en la nube IAAS, PAAS, SAAS.</a></li>
                    
                </ul>

                <h2>Unidad 2</h2>
                <ul>
                    <li><a href="{{Route('Unidad2')}}">Reconocer los conceptos de presentaci??n distribuida, presentaci??n remota, l??gica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas.</a></li>
                    <li><a href="{{Route('Unidad2')}}">Definir los conceptos de l??gica de acceso, presentaci??n y negocio a datos. </a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso de dise??o de logica de acceso a datos, l??gica de presentaci??n de datos y l??gica de negocio o l??gica de aplicaci??n. </a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso de desarrollo de logica de acceso a datos, l??gica de presentaci??n de datos y l??gica de negocio o l??gica de aplicaci??n. </a></li>
                    <li><a href="{{Route('Unidad2')}}">El concepto de nivel vinculado a programaci??n web.</a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso de planificaci??n en dos niveles. </a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso de planificaci??n en tres niveles.</a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso de planificaci??n multiniveles.</a></li>
                    <li><a href="{{Route('Unidad2')}}">Identificar problemas de actualizaci??n y mantenimiento de aplicaciones multinivel.</a></li>
                    <li><a href="{{Route('Unidad2')}}">Los conceptos de modelo, control y vista, en las arquitecturas Cliente/Servidor.7</a></li>
                    <li><a href="{{Route('Unidad2')}}">El concepto del Modelo Vista Controlador (MVC) en las arquitecturas  Cliente/Servidor.</a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso de flujo de control a partir del MVC, en las arquitecturas  Cliente/Servidor. </a></li>
                    <li><a href="{{Route('Unidad2')}}">El desarrollo de software a partir del MVC, en las arquitecturas Cliente/Servidor.</a></li>
                    <li><a href="{{Route('Unidad2')}}">El concepto de comunicaci??n orientada a conexi??n e interfaz de programaci??n de aplicaciones (API).</a></li>
                    <li><a href="{{Route('Unidad2')}}">El proceso de comunicaci??n y configuraci??n orientada a conexi??n e interfaz de programaci??n de aplicaciones (API).</a></li>
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