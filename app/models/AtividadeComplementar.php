<?php

require_once ROOT_PATH.'/config/database.php';

class AtividadeComplementar extends Connect {
        
    private $table;

    function __construct() {
        parent::__construct();
        $this->table = "atividadecomplementar";
    }

    public function getAll() {
        $query = $this->connection->query("SELECT * FROM $this->table");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getId($id) {
        $query = $this->connection->query("SELECT * FROM $this->table atv INNER JOIN aluno AS alu ON atv.alunoid = alu.alunoid WHERE atv.atividadecomplementarid = '{$id}'");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAluno() {
        $query = $this->connection->query("SELECT * FROM aluno");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getTipoAtividade() {
        $query = $this->connection->query("SELECT * FROM tipoAtividade");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function create($post) {
        $query  = "INSERT INTO $this->table (
            atividadecomplementarid,
            alunoid,
            tipoatividadeid,
            descricaoatividade,
            cargahoraria,
            instituicao,
            anoconclusao,
            arquivo,
            observacao
        ) VALUES (
            :atividadecomplementarid,
            :alunoid,
            :tipoatividadeid,
            :descricaoatividade,
            :cargahoraria,
            :instituicao,
            :anoconclusao,
            :arquivo,
            :observacao
        )";
        $query  = $this->connection->prepare($query)->execute([
            'atividadecomplementarid'=>0,
            'alunoid'=>$post['alunoid'],
            'tipoatividadeid'=>$post['tipoatividadeid'],
            'descricaoatividade'=>$post['descricaoatividade'],
            'cargahoraria'=>$post['cargahoraria'],
            'instituicao'=>$post['instituicao'],
            'anoconclusao'=>$post['anoconclusao'],
            'arquivo'=>'0', /* obter arquivo -> $_FILES */
            'observacao'=>$post['observacao']
        ]);
        return $this->verify($query);
    }

    public function delete($id) { 
        $resultQuery = $this->connection->prepare("DELETE FROM $this->table WHERE atividadecomplementarid = :id")->execute(['id'=>$id]);
        return $this->verify($resultQuery);
    }
    
    public function edit($post) {   
        $query = "UPDATE $this->table SET tipoatividadeid = :tipoatividadeid, descricaoatividade = :descricaoatividade, cargahoraria = :cargahoraria, instituicao = :instituicao, anoconclusao = :anoconclusao, arquivo = :arquivo, observacao = :observacao WHERE atividadecomplementarid = :id";
        $query = $this->connection->prepare($query)->execute(
            [
                'id'=>$post['id'],
                'tipoatividadeid'=>$post['tipoatividadeid'],
                'descricaoatividade'=>$post['descricaoatividade'],
                'cargahoraria'=>$post['cargahoraria'],
                'instituicao'=>$post['instituicao'],
                'anoconclusao'=>$post['anoconclusao'],
                'arquivo'=>$post['arquivo'],
                'observacao'=>$post['observacao']
            ]);
        return $this->verify($resultQuery);
    }

    public function show($id) {
        $query = $this->connection->query("SELECT * FROM $this->table WHERE atividadecomplementarid = '{$id}'");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function verify($result) {
        if($result == 1)
            return true;
        return false;
    }
}
