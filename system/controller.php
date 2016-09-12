<?php

class Controller extends System {

    protected function view($nome, $vars = null) {
        if (is_array($vars) && count($vars) > 0) {
            extract($vars, EXTR_PREFIX_ALL, 'view');
        }
        $file = VIEWS . $nome . '.php';
        if (!file_exists($file)) {
            die('Ocorreu um erro. A view não existe.');
        }
        require_once ($file);
    }

    protected function post($nome) {
        $post = $_POST[$nome];
        return $post;
    }

    protected function get($nome) {
        $get = $_GET[$nome];
        return $get;
    }

    public function init() {
        
    }

}
