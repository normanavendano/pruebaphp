Prueba de php 23/05/2022

Prueba realizada para validadcion de formulario en php y html, la gestion de datos se realizo con variables
tipo POST y GET.

Para el envio de datos a hoja de login se utilizo un formulario html con action a login.php y method post con dos campos
email(text) y password tipo password, los dos campos son requeridos para el proceso de validacion de credeciales generadas con 
un array multidimensional y recorriendo los usuarios existentes y redireccionando si es valido el usuario se envia una variable GET con el nombre  de usuario y cambio de nombre de boton a cerrar sesion sino es valido envia respuesta de usuario invalido.



Para la validacion del envio get se genero un formuario con action sobre index.php y method get con un campo tipo text.

URL:
    index.php
        Campos  y formulario para generar login y logout segun corresponda y envio de mensaje por GET para validar variables
            Variable POST
                Digitar email y password del usuario luego dar click en boton ingresar, verificar el mensaje que esta debajo de boton
            Variable GET
                Escribir un mensaje corto y dar click en boton enviar y validar en la url y en la caja debajo del boton enviar
    login.php
        Recibe y gestiona validacion de datos para login enviando sus respectivas respuestas
    logout.php
        Cierra sesion destruyendo las variables de sesion validadas


$url = "login_service.php";
$uri = "/webserviceprueba";
$cliente = new SoapClient(null, array('location' => $url, 'uri' => $uri));
