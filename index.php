<?php

$caminhos = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($caminhos){
    case '/':
        header("Location: /view/home.php");
        break;
    default:
        http_response_code(404);
}