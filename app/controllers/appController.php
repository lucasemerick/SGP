<?php

class App extends Controller {

    private $auth;
    private $redirect;
    private $db;

    public function init() {
        $this->auth = new AuthHelper();
        $this->redirect = new RedirectorHelper();
        if ($this->auth->checkLogin('boolean') == FALSE) {
            $this->redirect->goToControllerAction('auth', 'login');
        } else {
            $this->db = new AppModel();
        }
    }

    public function Index_action() {
        $turmas['turmas'] = $this->db->listaTurmas($_SESSION['userData']['cd_usuario']);
        $this->view('app', $turmas);
    }

}
