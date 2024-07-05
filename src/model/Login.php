<?php 

class Login extends Conexao
{
    public function autenticar($email,$senha): void
    {
        $sql = "SELECT nome, email, senha FROM usuario WHERE email = ?; ";
        $stmt = $this->conexao()->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $senhaVerificada = password_verify($senha, $dados[0]['senha'] ?? '');

        if($senhaVerificada){
            session_start();
            $_SESSION["logado"] = true;
            $_SESSION["nome"] = $dados[0]['nome'];
            $_SESSION["email"] = $dados[0]['email'];
            header('Location: /view/home.php');
        } else{
            header('Location: /login?senha=0');
        }
    }
}