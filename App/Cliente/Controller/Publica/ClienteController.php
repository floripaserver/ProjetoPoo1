<?php

namespace Cliente\Controller\Publica;

use Core\Controller;
use Cliente\Model\Publica\ClienteModel;


/**
 * Description of Controller Clientes
 *
 * @author paulo
 */

class ClienteController extends Controller {

    private $nome;
    private $cpf;
    private $endereco;
    private $order = 'ASC';

    public function indexAction() { 
        
        if($this->getParams('order') == 'ASC'){
           $this->order = 'DESC';           
        }
        
        $dados['order'] = $this->order;
       
        $clientes = $this->setClienteModel()
                ->listarCliente($this->order);
        
        $dados['dadosPessoais'] = $clientes['dadosPessoais'];
        $dados['dadosEndereco'] = $clientes['dadosEndereco'];
        
        return $this->view('index', $dados);
    }

    private function setClienteModel() {
        return new ClienteModel;
    }
    
}
