<?php

namespace Endereco\Model\Publica;

use Core\Model;
/**
 * Description of newPHPClass
 *
 * @author paulo
 */
class EnderecoModel extends Model {
    
    private $table = 'endereco';
    
    public function getEnderecoPessoa($pessoa_id){
        
        $where = "pessoa_id='{$pessoa_id}'";
        
        $this->setWhere($where);
        
        $result = self::read($this->table);
        
        return $result;
    }
}
