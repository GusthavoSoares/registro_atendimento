<?php

class AtendimentoRepositorio extends Conexao
{
    public function formaObjeto(array $dados)
    {
        return new RelatorioAtendimento($dados['tipo_solicitante'], 
        $dados['identificador_unico'],
        $dados['forma_atendimento'],
        $dados['nome'],
        $dados['email'],
        $dados['telefone'],
        $dados['tipo_informacao'],
        $dados['descricao'],
        $dados['ativo'],
        $dados['informacao'],
        $dados['data_registro']
        );
    }

    // Recebe os valores de POST e usa como parâmetro para aplicar os filtros de busca
    public function buscarTodos($forma, $publico, $tipoAtt, $dataInicio, $dataFim)
    {
        $filtros = [];
        $params = [];
            
        if (isset($forma) && $forma != 'default') {
            $filtros[] = 'solici.forma_atendimento = :forma';
            $params[':forma'] = $forma;
        }
        
        if (isset($publico) && $publico != 'default') {
            $filtros[] = 'solici.tipo_solicitante = :publico';
            $params[':publico'] = $publico;
        }
        
        if (isset($tipoAtt) && $tipoAtt != 'default') {
            $filtros[] = 'att.tipo = :tipoAtt';
            $params[':tipoAtt'] = $tipoAtt;
        }

        if (isset($dataInicio) && $dataInicio != '') {
            $filtros[] = 'att.data_registro >= :dataInicio';
            $params[':dataInicio'] = $dataInicio;
        }
        if (isset($dataFim) && $dataFim != '') {
            $filtros[] = 'att.data_registro <= :dataFim';
            $params[':dataFim'] = $dataFim;
        }

        $sql = "SELECT solici.tipo_solicitante, solici.identificador_unico, solici.forma_atendimento, solici.nome, solici.email, solici.telefone, solici.tipo_informacao, solici.descricao, solici.ativo, att.informacao, att.data_registro FROM usuario as user INNER JOIN solicitante as solici ON solici.id_usuario = user.id INNER JOIN atendimento as att ON att.id_solicitante = solici.id";
        if($filtros){
            $sql .= ' WHERE ' . implode(' AND ', $filtros);
        }

        $stmt = $this->conexao()->prepare($sql);
        $stmt->execute($params);
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $dadosGerais = array_map(function ($item){
            return $this->formaObjeto($item);
        }, $dados);

        return $dadosGerais;
    }

}
