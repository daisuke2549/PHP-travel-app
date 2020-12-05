<?php

namespace MyApp;

class Todo {
  private $_db;

  public function __construct() {
    try {
      $this->_db = new \PDO(DSN, ,'sasaki@localhost' '25492549ds');
      $this->_db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException $e) {
      echo $e->getMessage();
      exit;
    }
  }

  public function getAll() {
    $stmt = $this->_db->query("select * from travels by id desc");
    return $stmt->fetchAll(\PDO::FETCH_OBJ);
  }

}
