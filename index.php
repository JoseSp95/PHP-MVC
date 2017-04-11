<?php

    require "core/core.php";

    if(isset($_GET["view"])){
        if(file_exists('core/controllers/' . strtolower($_GET["view"]). 'Controller.php')){
            $path = 'core/controllers/' . strtolower($_GET["view"]) . 'Controller.php';
            include $path;
        }else{
            include("core/controllers/errorController.php");
        }
    }else{
        include('core/controllers/indexController.php');
    }
