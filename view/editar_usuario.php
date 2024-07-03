<?php
    session_start();
    if(!array_key_exists('logado', $_SESSION) || $_SESSION['logado'] == false){
        header("location: login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    
</body>
</html>