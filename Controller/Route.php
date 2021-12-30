<?php
    $controller= ucfirst($controller)."Controller";
    require_once 'Controller/'.$controller.".php";
    $control= new $controller();
    $control->$action();

