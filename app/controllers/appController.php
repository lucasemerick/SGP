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
        }
    }

    public function Index_action() {
        $this->view('app');
    }

}
