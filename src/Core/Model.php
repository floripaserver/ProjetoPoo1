<?php

namespace Core;

use Core\Conexao;

/**
 * Description of Model
 *
 * @author paulo
 */
class Model extends Conexao {

    private $where;
    private $orderBy;
    private $limit;
    private $offSet;

    /**
     * Model::insertRegistro('pessoa', [
      'nome' => 'paulo',
      'cpf' => '95258418049' ]);
     * @param type $table
     * @param array $dados
     * @return type
     */
    protected static function insertRegistro($table, $dados) {

        $array = [
            'table' => $table,
            'values' => $dados
        ];

        return self::insert($array);
    }

    protected function read($table) {
        //protected static function read($table, $where = null, $orderBy = null, $limit = null, $offset = null) {

        $sql = "SELECT * FROM {$table} {$this->where} {$this->orderBy} {$this->limit} {$this->offSet}";

        return self::select($sql);
    }

    /**
     * $arrayDelete = ['table'=>'pessoa',
      'where'=>[
      'nome'=>'Bruno',
      'fone'=>'88888888'
      ]];
     * @param type $table
     * @param type $dados
     * @return type
     */
    protected static function updateRegistro($table, $values, $where) {

        $array = [
            'table' => $table,
            'values' => $values,
            'where' => $where
        ];

        return self::update($array);
    }

    protected static function deletaRegistro($table, $where) {
        $array = [
            'table' => $table,
            'where' => $where
        ];
        return self::delete($array);
    }

    /**
     * formato nomedocampo='valor'
     * @param type $where
     */
    protected function setWhere($where) {

        $this->where = ($where != null ? "WHERE {$where}" : "");
        return $this;
    }

    public function setOrderBy($orderBy) {
        $this->orderBy = $orderBy = ($orderBy != null ? "ORDER BY {$orderBy}" : "");
        return $this;
    }
    
    protected function setLimit($limit) {
        $this->limit = $limit = ($limit != null ? "LIMIT {$limit}" : "");
        return $this;
    }

    
    public function setOffSet($offSet) {
        $this->offSet = $offset = ($offset != null ? "OFFSET {$offset}" : "");
        return $this;
    }

}
