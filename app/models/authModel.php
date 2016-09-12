<?php

class AuthModel extends Model {

    public $_tabela = "usuario";

    public function cadastrar($nome = "", $email = "", $senha = "") {
        $teste = $this->read("email = ' . $email");
        if (!empty($teste)) {
            return false;
        } else {
            $array['nome'] = $nome;
            $array['email'] = $email;
            $array['senha'] = $senha;
            $this->insert($array);
            return true;
        }
    }

}
