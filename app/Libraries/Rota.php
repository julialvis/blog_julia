<?php
class Rota{
    private $controlador = "Paginas";
    private $metodo = 'index';
    private $parametros = [];
    public function __construct(){
        $url = $this->url() ? $this->url(): [0];
        if(file_exists('../app/Controllers/'.ucwords($url[0]).'.php')){
            unset($url[0]);
        }
        require_once '../app/Controllers/'.$this->controlador.'.php';
        $this->controlador = new $this->controlador;
        if(isset($url[1])){
            if(method_exists($this->controlador, $url[1])){
                $this->metodo = $url[1];
                unset($url[1]);
            } // fim do if que verifica se o metodo existe
        } // fim do if que verifica se a url existe

        $this->parametros = $url ? array_values($url) : [];
        call_user_func_array([$this->controlador, $this->metodo], $this->parametros);

        var_dump($this);
    }
    public function url(){
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL); //o filtro remove caracteres ilegais de uma url
        if(isset($url)){ //isset - verifica se a url existe
            $url = trim(rtrim($url,'/')); //trim - retira espaço no início e no final de uma string. rtrim - ... do final da string
            $url = explode('/', $url); //explode - divide uma string em strings, retorna um array
            return $url; //retorna a url
        }
    }
}
?>