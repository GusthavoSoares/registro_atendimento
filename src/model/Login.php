<?php 

class Login extends Conexao
{
    public function autenticar($email,$senha): void
    {
        $pdo = new PDO('mysql:host=localhost;dbname=gestaoatendimento', 'root', 'jonassj');
        $sql = "SELECT emailUsuario, loginUsuario, senhaUsuario FROM usuario WHERE emailUsuario = ?; ";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $email);
        $statement->execute();
        $dados = $statement->fetchAll(PDO::FETCH_ASSOC);

        $senhaVerificada = password_verify($senha, $dados[0]['senhaUsuario'] ?? '');

        if($senhaVerificada){
            session_start();
            $_SESSION["logado"] = true;
            $_SESSION["emailUsuario"] = $dados[0]['emailUsuario'];
            $_SESSION["loginUsuario"] = $dados[0]['loginUsuario'];
            header('Location: /view/index.php');
        } else{
            header('Location: /login?senha=0');
        }
    }
}