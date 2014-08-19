<?php

namespace Pessoa\Model\Publica;

use Core\Model;

/**
 * Description of PessoaModel
 *
 * @author paulo
 */
class PessoaModel extends Model {

    private $table = 'pessoa';

    public function getPessoa() {
        
        $pessoa = self::read($this->table);
        
        return $pessoa;
    }

}
