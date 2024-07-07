<?php

$caminhos = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($caminhos){
    case '/':
        header("Location: /view/home.php");
        break;
    case '/admin':
        header('Location: /view/admin.php');
        break;
    case '/logout':
        include 'src/controller/deslogando.php';
        break;
    default:
        http_response_code(404);
}