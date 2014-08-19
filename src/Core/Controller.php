<?php

namespace Core;

/**
 * Description of Controller
 *
 * @author paulo
 */
class Controller {

    private $pathView = 'Publica';
    private $extencaoView = '.phtml'; 
    
    
    /**
     * Istancia o objeto Rotas
     */
    private function setObjetoRotas(){
        return new Rotas;
    }

    /**
     * herda os parametroa da classe Rotas por get ou post
     * @param type $nome
     * @return type
     */
    public function getParams($nome) {
        
        return $this->setObjetoRotas()->getParams($nome);
    }
    
    /**
     * 
     * @param type $view nome do arquivo
     * @param type $dados recebe um array
     * @return type
     */
    protected function view($view, $dados = null) {
               //echo APP."/{$this->setObjetoRotas()->pathApp}/View/{$this->pathView}/{$view}{$this->extencaoView}";
        if (file_exists(APP . "/{$this->setObjetoRotas()->pathApp}/View/{$this->pathView}/{$view}{$this->extencaoView}")) {
            
            if(is_array($dados)&& count($dados) > 0){
                //extraimos os dados e colocamos um prefixo com o nome do aplicativo 
                //seguido de underline mais o nome do campo(indice) ex: $Index_dataHoje
                extract($dados, EXTR_PREFIX_ALL, $this->setObjetoRotas()->pathApp);                
            }
            
            Start::getMenu();
            
            return require_once APP . "/{$this->setObjetoRotas()->pathApp}/View/{$this->pathView}/{$view}{$this->extencaoView}";
        } else {
            echo "<div class=\"alert alert-error\">View {$view} não foi criada!</div>";
        }
    }

}
