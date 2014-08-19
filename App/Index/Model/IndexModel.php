<?php

namespace Index\Model;

use Core\Model;

/**
 * Description of Index
 *
 * @author paulo
 */
class IndexModel extends Model {

    public $table = "pessoa";

    public function listar($limite, $offset = null) {
        
        $result = self::read($this->table, null, $limite, $offset);        
        return $result;
    }
    
    public function cadastrar($dados){
        $result = self::insertRegistro($this->table, $dados);        
        return $result;
    }
    
    public function atualizar($values,$where){
        $result = self::updateRegistro($this->table, $values, $where);
        return $result;
    }
    
    public function deletar($where){
        $result = self::deletaRegistro($this->table, $where);
        return $result;
    }

}
