<?php

namespace Cliente\Model\Publica;

use Core\Model;
use Pessoa\Model\Publica\PessoaModel;
use Endereco\Model\Publica\EnderecoModel;

/**
 * Description of Model Cliente
 *
 * @author paulo
 */
class ClienteModel extends Model {   

    private $numeroRegistros = 10;
    //private $ordenar;
    
    public function listarCliente($orderBY) {

        $dados = $this->setPessoaModel()
                ->setOrderBy('nome '.$orderBY)
                ->setLimit($this->numeroRegistros)
                ->getPessoa();
        
        foreach ($dados as $key => $value) {
            
            $end[] = $this->setEnderecoModel()->getEnderecoPessoa($value['id']);
            
        }
       // print_r($dados);
        $clientes['dadosPessoais']= $dados;
        $clientes['dadosEndereco']= $end;
        
        return $clientes;
    }
    
    public function getCliente($where){
        
        $clientes = self::read($this->table, $where);
        
        return $clientes;
    }    
    
    private function setPessoaModel(){
        return new PessoaModel;
    }

    private function setEnderecoModel(){
        return new EnderecoModel;
    }

}
