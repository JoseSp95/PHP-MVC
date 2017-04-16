<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo APP_URL?>">
    <title><?php echo APP_TITLE ?></title>
    <link rel="stylesheet" href="views/materialize/css/materialize.min.css">
    <script src="views/jquery/jquery-3.2.0.min.js"></script>
    <script src="views/materialize/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="views/app/js/generales.js"></script>
    <style>
        .modal{
            width: 30%;
        }

        .modal .modal-content{
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        .first{
            margin-top: 20px;
        }

        .recordar{
            margin-left: 10px;
            margin-top: 10px;
        }

        .registro{
            text-align: center;
            font-size: 25px;
            font-family: "Roboto", sans-serif;
            color: white;
            border-radius: 10px;
        }


        /* label color */
        .input-field label {
            color: gray;
        }
        .material-icons{
            color: gray;
        }

        .brand-logo i{
            color: white;
        }

        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        .modal-footer{
            margin-top: 0;
        }

        .TerminosYCondiciones{
            padding-bottom: 0;
            margin-bottom: -10px;
            margin-left: 10px;
        }

        .nav-wrapper .material-icons{
            color: white;
        }

        .bttIniciar{
            margin-top: 20px;
        }

        .linkContraseñaPerdida{
            margin-top: 10px;
            margin-right: 10%;
            color: gray;
        }

        .recuperarContraseña{
            text-align: center;
            border-radius: 10px;
            color: white;
            font-size: 20px;
        }

    </style>
    <script>
        $(document).ready(function () {
            $(".modal").modal();
            $(".button-collapse").sideNav();
        });
    </script>
</head>