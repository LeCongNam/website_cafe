<?php
    require_once 'config/Database.php';

    if(isset($_GET['controller'])){
        $controller= $_GET['controller'];
        $action= $_GET['action'];

    }else {
        $controller='home';
        $action = 'index';
    }

    require_once 'Controller/Route.php';