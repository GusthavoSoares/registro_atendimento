<?php

class RelatorioAtendimento
{
    private string $tipo_solicitante;
    private string $identificador_unico;
    private string $forma_atendimento;
    private string $nome;
    private string $email;
    private string $telefone;
    private string $tipo_informacao;
    private string $descricao;
    private string $ativo;
    private string $informacao;
    private $data_registro;

    public function __construct($tipo_solicitante, $identificador_unico, $forma_atendimento, $nome, $email, $telefone, $tipo_informacao, $descricao, $ativo, $informacao, $data_registro)
    {
        $this->tipo_solicitante = $tipo_solicitante;
        $this->identificador_unico = $identificador_unico;
        $this->forma_atendimento = $forma_atendimento;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->tipo_informacao = $tipo_informacao;
        $this->descricao = $descricao;
        $this->ativo = $ativo;
        $this->informacao = $informacao;
        $this->data_registro = $data_registro;
    }

    public function getTipoSolicitante() {
        return $this->tipo_solicitante;
    }
    public function getIdentificadorUnico() {
        return $this->identificador_unico;
    }
    public function getFormaAtendimento() {
        return $this->forma_atendimento;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getTelefone() {
        return $this->telefone;
    }
    public function getTipoInformacao() {
        return $this->tipo_informacao;
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function getAtivo() {
        return $this->ativo;
    }
    public function getInformacao() {
        return $this->informacao;
    }
    public function getData()
    {
        return $this->data_registro;
    }
}