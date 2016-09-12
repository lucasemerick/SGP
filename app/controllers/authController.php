<?php

class Auth extends Controller {

    private $auth;
    private $redirect;
    private $db;

    public function init() {
        $this->auth = new AuthHelper();
        $this->redirect = new RedirectorHelper();
        if ($this->auth->checkLogin('boolean') == TRUE) {
            $this->redirect->goToControllerAction('app', 'index');
        } else {
            $this->db = new AuthModel();
        }
    }

    public function Index_action() {
        $this->redirect->goToControllerAction('auth', 'login');
    }

    public function Cadastro() {
        $this->view('authRegistro');
    }

    public function Cadastrar() {
        $nome = $this->post('nome');
        $email = $this->post('email');
        $senha = $this->post('senha');
        if ($nome == "" || $email == "" || $senha == "") {
            $situacao['erros'] = 'Você deixou campos em branco.';
            $this->view('authRegistro', $situacao);
        } else if ($this->db->cadastrar($nome, $email, $senha) == TRUE) {
            $this->redirect->goToControllerAction('auth', 'cadastro');
        } else {
            $situacao['erros'] = 'Já existe um usuário com este email cadastrado.';
            $this->view('authRegistro', $situacao);
        }
    }

    public function login() {
        $situacao['erros'] = FALSE;
        if ($this->getParams('acao') == 'login') {
            $this->auth->setTableName('usuario')
                    ->setUserColumn('email')
                    ->setPassColumn('senha')
                    ->setUser($this->post('email'))
                    ->setPass($this->post('senha'))
                    ->setLoginControllerAction('app', 'index');
            if ($this->auth->login() == false) {
                $situacao['erros'] = TRUE;
            } else {
                $situacao['erros'] = FALSE;
            }
        }
        if ($situacao['erros'] == TRUE) {
            $this->view('authLogin', $situacao);
        } else {
            $this->view('authLogin', $situacao);
        }
    }

    public function logout() {
        if ($this->getParams('acao') == 'logout') {
            $this->auth->setLogoutControllerAction('auth', 'login')->logout();
        }
    }

}
