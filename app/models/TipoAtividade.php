<?php

require_once ROOT_PATH.'/config/database.php';

class TipoAtividade extends Connect {
        
    private $table;

    function __construct() {
        parent::__construct();
        $this->table = "tipoatividade";
    }

    public function getAll() {
        $query = $this->connection->query("SELECT * FROM $this->table");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getId($id) {
        $query = $this->connection->query("SELECT * FROM $this->table WHERE tipoatividadeid = '{$id}'");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function create($post) {
        $query  = "INSERT INTO $this->table (tipoatividadeid,descricao) VALUES (:tipoatividadeid,:descricao)";
        $query  = $this->connection->prepare($query)->execute(['tipoatividadeid'=>0,'descricao'=>$post['descricao']]);
        return $this->verify($query);
    }

    public function delete($id) { 
        $resultQuery = $this->connection->prepare("DELETE FROM $this->table WHERE tipoatividadeid = :id")->execute(['id'=>$id]);
        return $this->verify($resultQuery);
    }

    public function edit($post, $id) {   
        $query = "UPDATE $this->table SET descricao = :descricao WHERE tipoatividadeid = '{$id}'";
        $query = $this->connection->prepare($query)->execute(['descricao'=>$post['descricao']]);
        return $this->verify($resultQuery);
    }

    public function show($id) {
        $query = $this->connection->query("SELECT * FROM $this->table WHERE tipoatividadeid = '{$id}'");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function verify($result) {
        if($result == 1)
            return true;
        return false;
    }
}
