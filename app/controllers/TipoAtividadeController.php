<?php

require_once ROOT_PATH.'/app/models/TipoAtividade.php';

class TipoAtividadeController{
    private $model;

    function __construct(){
        $this->model = new TipoAtividade();
    }

    public function index($data = null) {

        $base = $this->model->getAll();
        require_once '../app/views/tipoAtividade/index.php';
    }

    public function create($post) {
        if (!empty($post)) {
            $result = $this->model->create($post);
            $this->redirectWithMessage('insert', $result);
        } else {
            require_once '../app/views/tipoAtividade/create.php';
        }
    }

    public function delete($id) {
        $result = $this->model->delete($id);
        $this->redirectWithMessage('delete', $result);
    }

    public function edit($post, $id) {
        $base = $this->model->getId($id);

        if (!empty($post)) {
            $result = $this->model->edit($post,$id);
            $this->redirectWithMessage('insert', $result);
        } else {    
            require_once '../app/views/tipoAtividade/edit.php';
        }
    }

    public function show($id) {
        $base = $this->model->show($id);
        require_once '../app/views/tipoAtividade/show.php';
    }

    public function redirectWithMessage($type, $result){
        header("Location: /TipoAtividade");
    }

    public function showMessage($success, $error, $status){
        if($status == 1)
            $returnMessage = 'Registro $success com sucesso!';
        else
            $returnMessage = 'Erro ao $error!';
        $this->getAll($returnMessage);
    }
}
