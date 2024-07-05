<?php

class UsuarioController extends Conexao
{

    public function formaObjeto(array $dados)
    {
        return new Usuario($dados['idUsuario'], $dados['nomeUsuario'], $dados['emailUsuario'], $dados['loginUsuario']);
    }

    public function buscar()
    {
        $sql = "SELECT idUsuario, nomeUsuario, emailUsuario, loginUsuario FROM usuario";
        $stmt = $this->conexao()->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $dados = $stmt->fetchAll();

        $dadosUsuario = array_map(function($item)
        {
            return $this->formaObjeto($item);
        }, $dados);

        return $dadosUsuario;
    }
}