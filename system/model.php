<?php

class Model {

    protected $db;
    public $_tabela;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=hypertestdb', 'root', '');
        $this->db->exec("set names utf8");
    }

    public function insert(Array $dados) {
        $campos = implode(", ", array_keys($dados));
        $valores = "'" . implode("','", array_values($dados)) . "'";
        $this->db->query("INSERT INTO `{$this->_tabela}` ({$campos}) VALUES ({$valores})");
    }

    public function read($where = NULL, $limit = NULL, $offset = NULL, $orderby = NULL) {
        $where = ($where != NULL ? "WHERE {$where}" : "");
        $limit = ($limit != NULL ? "LIMIT {$limit}" : "");
        $offset = ($offset != NULL ? "OFFSET {$offset}" : "");
        $orderby = ($orderby != NULL ? "ORDER BY {$orderby}" : "");
        $q = $this->db->prepare("SELECT * FROM `{$this->_tabela}` {$where} {$orderby} {$limit} {$offset}");
        $q->execute();
        $q->setFetchMode(PDO::FETCH_ASSOC);
        return $q->fetchAll();
    }

    public function update(Array $dados, $where) {
        foreach ($dados as $ind => $val) {
            $campos[] = "{$ind} = '{$val}'";
        }
        $campos = implode(", ", $campos);
        return $this->db->query("UPDATE `{$this->_tabela}` SET {$campos} WHERE {$where}");
    }

    public function delete($where) {
        return $this->db->query("DELETE FROM `{$this->_tabela}` WHERE {$where}");
    }

}
