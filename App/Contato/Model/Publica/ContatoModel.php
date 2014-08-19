<?php
namespace Contato\Model\Publica;

use Core\Model;
/**
 * Description of ContatoModel
 *
 * @author paulo
 */
class ContatoModel extends Model {
    
    private $table = 'contato';
    
    public function cadastrar($dados){
        
        $insert = self::insertRegistro($this->table, $dados);
    
        return $insert;
    }
    
}
