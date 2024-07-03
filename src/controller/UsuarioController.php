<?php

class UsuarioController extends Conexao
{

    public function formaObjeto(array $dados)
    {
        return new Usuario($dados['idUsuario'], $dados['nomeUsuario'], $dados['emailUsuario'], $dados['loginUsuario']);
    }

    public function buscar(): array
    {
        $sql = "SELECT idUsuario, nomeUsuario, emailUsuario, loginUsuario FROM usuario";
        $stmt = $this->conexao()->query($sql);
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $dadosUsuario = array_map(function($item)
        {
            return $this->formaObjeto($item);
        }, $dados);

        return $dadosUsuario;
    }
}