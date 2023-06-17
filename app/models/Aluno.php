<?php

require_once ROOT_PATH.'/config/database.php';

class Aluno extends Connect {
        
    private $table;

    function __construct() {
        parent::__construct();
        $this->table = "aluno";
    }

    public function getAll() {
        $query = $this->connection->query("SELECT * FROM $this->table");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getId($id) {
        $query = $this->connection->query("SELECT * FROM $this->table WHERE alunoid = '{$id}'");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function create($post) {
        $query  = "INSERT INTO $this->table (alunoid,cpf,nome,matricula,email,telefone) VALUES (:alunoid,:cpf,:nome,:matricula,:email,:telefone)";
        $query  = $this->connection->prepare($query)->execute([
            'alunoid'=>0,
            'cpf'=>$post['cpf'],
            'nome'=>$post['nome'],
            'matricula'=>$post['matricula'],
            'email'=>$post['email'],
            'telefone'=>$post['telefone']
        ]);
        return $this->verify($query);
    }

    public function delete($id) { 
        $query = $this->connection->prepare("DELETE FROM $this->table WHERE alunoid = :id")->execute(['id'=>$id]);
        return $this->verify($query);
    }

    public function edit($post) {   
        $query = "UPDATE $this->table SET cpf = :cpf, nome = :nome, matricula = :matricula, email = :email, telefone = :telefone WHERE alunoid = :id";
        $query = $this->connection->prepare($query)->execute(
            [
                'id'=>$post['id'],
                'cpf'=>$post['cpf'],
                'nome'=>$post['nome'],
                'matricula'=>$post['matricula'],
                'email'=>$post['email'],
                'telefone'=>$post['telefone']
            ]);
        return $this->verify($query);
    }

    public function verify($result) {
        if($result == 1)
            return true;
        return false;
    }
}
