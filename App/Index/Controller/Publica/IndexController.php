<?php

namespace Index\Controller\Publica;

use Core\Controller;
use Index\Model\IndexModel;

/**
 * Description of Controller
 *
 * @author paulo
 */
class IndexController extends Controller {


    
    public function indexAction() {
        
        /*$dados = ['nome'=>'Fabio', 'cpf'=>'123456789'];
        $insert = $this->setIndexmodel()->cadastrar($dados);        
        if($insert){
            echo 'Cadastrado com sucesso';
        } else {
            echo 'erro ao cadastrar';
        }*/
        
        /*$values = ['rg'=>'87887878', 'email'=>'26262633@aa.com.br'];
        $where = ['id'=>'26'];
        $update = $this->setIndexmodel()->atualizar($values, $where);
        if($update){
            echo 'Atualizado com sucesso';
        } else {
            echo 'Erro ao atualizar';
        }*/        
        
        /*$where = ['id'=>'17'];
        $deletar = $this->setIndexmodel()->deletar($where);
        if($deletar){
            echo 'Deletado com sucesso';
        } else {
            echo 'Erro ao deletar';
        }*/
        
    $dados['cliente'] = $this->setIndexmodel()->listar('10');
    
    //$dados['cliente'] = $pessoa;
    //print_r($dados);
        return $this->view('index', $dados);
    }
    
    private function setIndexmodel(){
        return new IndexModel;
    }

}
