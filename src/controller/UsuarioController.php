<?php

class UsuarioController extends Conexao
{

    public function formaObjeto(array $dados)
    {
        return new Usuario($dados['nome'], $dados['email'], $dados['cargo'], $dados['ativo']);
    }

    public function buscar()
    {
        $sql = "SELECT nome, email, cargo, ativo FROM usuario; ";
        $stmt = $this->conexao()->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $dados = $stmt->fetchAll();

        $dadosUsuario = array_map(function($item)
        {
            return $this->formaObjeto($item);
        }, $dados);

        return $dadosUsuario;
    }
}