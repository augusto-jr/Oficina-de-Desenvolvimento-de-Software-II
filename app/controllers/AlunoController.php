<?php

require_once ROOT_PATH.'/app/models/Aluno.php';

class AlunoController{
    private $model;

    function __construct(){
        $this->model = new Aluno();
    }

    public function index($data = null) {
        $base = $this->model->getAll();
        
        require_once '../app/views/Aluno/index.php';
    }

    public function create($post) {
        if (!empty($post)) {
            $result = $this->model->create($post);
            $this->redirectWithMessage('insert', $result);
        } else {
            require_once '../app/views/aluno/create.php';
        }
    }

    public function delete($id) {
        $result = $this->model->delete($id);
        $this->redirectWithMessage('delete', $result);
    }

    public function edit($post, $id) {
        $base = $this->model->getId($id);

        if (!empty($post)) {
            $result = $this->model->edit($post);
            $this->redirectWithMessage('insert', $result);
        } else {    
            require_once '../app/views/Aluno/edit.php';
        }
    }

    public function show($id) {
        $base = $this->model->show($id);
        require_once '../app/views/Aluno/show.php';
    }

    public function redirectWithMessage($type, $result){
        header("Location: /aluno");
    }

    public function showMessage($success, $error, $status){
        if($status == 1)
            $returnMessage = 'Registro $success com sucesso!';
        else
            $returnMessage = 'Erro ao $error!';
        $this->getAll($returnMessage);
    }
}
