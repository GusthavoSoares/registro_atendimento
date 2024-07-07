<?php

class UsuarioRepositorio extends Conexao
{
    public function formaObjeto(array $dados)
    {
        return new Usuario($dados['nome'], $dados['email'], $dados['cargo'], $dados['ativo']);
    }
    public function buscar()
    {
        $sql = "SELECT nome, email, cargo, ativo FROM usuario";
        $stmt = $this->conexao()->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $dados = $stmt->fetchAll();

        $dadosUsuario = array_map(function($item){
            return $this->formaObjeto($item);
        }, $dados);

        return $dadosUsuario;
    }

    public function inserir(Usuario $usuario)
    {
        $sql = "INSERT INTO usuario (nome, email, senha, cargo) VALUES (?,?,?,?)";
        $stmt = $this->conexao()->prepare($sql);
        $stmt->bindValue(1, $usuario->getNome());
        $stmt->bindValue(2, $usuario->getEmail());
        $stmt->bindValue(3, $usuario->getSenha());
        $stmt->bindValue(4, $usuario->getCargo());
        $stmt->execute();
    }

    public function editar()
    {
        
    }

    public function excluir()
    {
        
    }
}