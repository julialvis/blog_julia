<?php
class Controller{
    public function model($model){
        require_once '../app/Models/'.$model.'php';
        return new $model;
    }
    public function view($view, $dados = []){
        $arquivo = ('../app/Views'.$view.'php');
        if(file_exists($arquivo)){
        }else{
            die("O arquivo não existe");
        }
    }
}
?>