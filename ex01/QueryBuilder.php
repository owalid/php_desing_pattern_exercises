<?php

class QueryBuilder {
  
  private $select = [];
  private $where = [];
  private $from = [];

  public function select(...$args)
  {
    $this->select = $args;
    return $this;
  }

  public function where(...$args) 
  {
    $this->where = $args;
    return $this;
  }

  public function from($table, $alias = false) {
    if (!$alias) {
      $this->from[] = $table;
    } else {
      $this->from[] = "$table AS $alias";
    }
    return $this;
  }

  public function __toString() {
    return 'SELECT ' . implode(', ', $this->select)
    . ' FROM ' . implode(', ', $this->from)
    . ' WHERE ' . implode(' AND ', $this->where) . PHP_EOL;
  }
}