<?php

require_once("controller/personaController.php");

$controller = new personaController;

if(isset($_GET['m'])):
    $metodo = $_GET['m'];

    if(method_exists($controller,$metodo)):
        $controller->{$metodo}();
    endif;

else:
    $controller->index();
endif;

?>