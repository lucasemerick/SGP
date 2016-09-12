<?php

class AppModel extends Model {

    public $_tabela = "turma";

    public function listaTurmas($cd_usuario) {
        return $this->read(' cd_usuario = ' . $cd_usuario);
    }

}
