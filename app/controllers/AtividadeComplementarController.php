<?php

require_once ROOT_PATH.'/app/models/AtividadeComplementar.php';

class AtividadeComplementarController{
    private $model;

    function __construct(){
        $this->model = new AtividadeComplementar();
    }

    public function index($data = null) {
        $base = $this->model->getAll();
        
        require_once '../app/views/AtividadeComplementar/index.php';
    }

    public function create($post) {
        $aluno = $this->model->getAluno();
        $atividade = $this->model->getTipoAtividade();
        if (!empty($post)) {
            $result = $this->model->create($post);
            $this->redirectWithMessage('insert', $result);
        } else {
            require_once '../app/views/AtividadeComplementar/create.php';
        }
    }

    public function delete($id) {
        $result = $this->model->delete($id);
        $this->redirectWithMessage('delete', $result);
    }

    public function edit($post, $id) {
        $base = $this->model->getId($id);
        $atividade = $this->model->getTipoAtividade();

        if (!empty($post)) {
            $result = $this->model->edit($post);
            $this->redirectWithMessage('insert', $result);
        } else {    
            require_once '../app/views/AtividadeComplementar/edit.php';
        }
    }

    public function show($id) {
        $base = $this->model->show($id);
        require_once '../app/views/AtividadeComplementar/show.php';
    }

    public function redirectWithMessage($type, $result){
        header("Location: /atividadeComplementar");
    }

    public function showMessage($success, $error, $status){
        if($status == 1)
            $returnMessage = 'Registro $success com sucesso!';
        else
            $returnMessage = 'Erro ao $error!';
        $this->getAll($returnMessage);
    }
}
