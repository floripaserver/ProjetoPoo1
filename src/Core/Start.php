<?php

namespace Core;

/**
 * Description of Start
 *
 * @author paulo
 */
class Start {

    public static function header() {
        $topo = "
<!DOCTYPE html>
<html lang=\"pt-br\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" href=\"../../favicon.ico\">

        <title>SoftEmp</title>

        <!-- Bootstrap core CSS -->
        <link href=\"/" . WEBROOT . "/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"/" . WEBROOT . "/bootstrap/css/bootstrap-responsive.min.css\" rel=\"stylesheet\">


        <!-- Custom styles for this template -->
        <link href=\"/" . WEBROOT . "/Css/navbar-fixed-top.css\" rel=\"stylesheet\">
        <link href=\"/" . WEBROOT . "/Css/theme.css\" rel=\"stylesheet\">
        <link href=\"/" . WEBROOT . "/Css/form.css\" rel=\"stylesheet\">    
        <link href=\"/" . WEBROOT . "/Css/sticky-footer-navbar.css\" rel=\"stylesheet\">

        <!-- Just for debugging purposes. Don t actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src=\"/" . WEBROOT . "/Js/ie8-responsive-file-warning.js\"></script><![endif]-->
        <script src=\"/" . WEBROOT . "/Js/ie-emulation-modes-warning.js\"></script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"/" . WEBROOT . "/Js/ie10-viewport-bug-workaround.js\"></script>

    </head>

    <body>";
        echo $topo;
    }

    public static function getMenu() {
        $menu = "<!-- Fixed navbar -->
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"/\">SoftEmp</a>
            <div class=\"nav-collapse collapse\">
                <p class=\"navbar-text pull-right\">
                    Logado como <a href=\"/Auth/sair\" class=\"navbar-link\">{}</a>
                </p>
                <ul class=\"nav\">
                    <li class=\"active\"><a href=\"/\">Home</a></li>
                    <li ><a href=\"/quemsomos\">Quem somos</a></li>
                    <li><a href=\"/cliente\">Clientes</a></li>
                    <li><a href=\"/contato\">Contato</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>";
        echo $menu;
    }

    public static function rodape() {
        $rodape = "<div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">SoftEmp - Copyright &COPY; 2014.</p>
            </div>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"/" . WEBROOT . "/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"/" . WEBROOT . "/Js/jquery.validate-1.13.0.min.js\"></script>
        <script src=\"/" . WEBROOT . "/Js/validacao.js\"></script>

    </body>
</html>";
        echo $rodape;
    }

}
