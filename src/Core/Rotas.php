<?php

namespace Core;

/**
 * Description of Rotas
 * O nome do aplicativo define o nome dos controller,views e model
 *
 * @author paulo
 */
class Rotas {

    private $app = APP; // pasta raiz dos aplicativos definida no bootstrap
    private $extencao = '.php'; //Extenção
    private $url; //atribuida por setUrl
    private $controller;
    private $controllerTipo = 'Publica'; //Admin ou Publica determinado pela session
    private $action;
    private $params;
    public $pathApp; //pasta do aplicativo
    private $pathController = 'Controller';
    private $obj; //objeto da controller

    function __construct() {

        $this->setUrl();
        $this->setController();
        $this->setAction();
        $this->setParams();
    }

    /**
     * recebe os paramentros da url
     */
    private function setUrl() {
        //quebra os parametros depois da url pela / e transformando em um array
        $url = preg_split("[\\/]", $_SERVER["REQUEST_URI"], -1, PREG_SPLIT_NO_EMPTY);

        //remove tudo que for caractere
        $this->url = preg_replace('/[\s\W]+/', '', $url);
    }

    /**
     * Classe para o carregamento e validação do controller     * 
     */
    private function setController() {
        //se não for digitado nada no primeiro parametro depois do dominio assume o aplicativo index
        $defineController = (isset($this->url[0]) ? $this->url[0] : "index");

        //passando a primeira letra do nome do controller para maiusculo
        $controller = ucfirst($defineController);

        //atribuindo nome da pasta do apricativo
        $this->pathApp = $controller;

        //concatenando o parametro Controller ao nome do controller
        $this->controller = $controller . "Controller";

        //monta o caminho do controller
        $fileController = $this->app . DIRECTORY_SEPARATOR . $this->pathApp . DIRECTORY_SEPARATOR . $this->pathController . DIRECTORY_SEPARATOR . $this->controllerTipo . DIRECTORY_SEPARATOR . $this->controller . $this->extencao;

        //verifica se o arquivo existe
        if (file_exists($fileController)) {

            //monta o namespace da classe
            $classeController = "\\{$this->pathApp}\\{$this->pathController}\\{$this->controllerTipo}\\{$this->controller}";

            //verifica se a classe existe
            if (class_exists($classeController)) {

                //istanciando o objeto da classe controller
                $this->obj = new $classeController;
            } else {
                echo "<div class=\"alert alert-error\">Classe {$this->controller} no Diretorio/{$this->pathApp}/Controller/{$this->controllerTipo}/{$this->controller} não existe!</div>";
            }
        } else {
            echo "<div class=\"alert alert-error\">O arquivo controller {$this->controller} no Diretorio/{$this->pathApp}/Controller não existe!</div>";
        }
    }

    /**
     * se não for passado a action assume index,     * 
     * pois o php4 usa a funcao com o mesmo nome da classe como um construtor.
     */
    private function setAction() {
        //para nao ter problema com php4 alterar index para indexAction,
        $defineAction = (!isset($this->url[1]) || $this->url[1] == null || $this->url[1] == "index" ? "indexAction" : $this->url[1]);

        //verificando se existe o metodo na classe
        if (method_exists($this->obj, $defineAction)) {

            //se existir o metodo atribui a action
            $this->action = $defineAction;
        } else {
            //$e = new ErroPersonalizado;
            //$this->seErro("Metodo {$defineAction} não existe na Classe {$this->controller}!", SE_ERROR, true);
            echo "<div class=\"alert alert-error\">Metodo {$defineAction} não existe na Classe {$this->controller}!</div>";
            //die;
        }
    }

    /**
     * tratando os paramentros depois da action 
     */
    private function setParams() {

        //retirando o controller e a action
        unset($this->url[0], $this->url[1]);

        //separando o array url em indice e valor;
        $i = 0;
        if (!empty($this->url)) {
            foreach ($this->url as $value) {
                if ($i % 2 == 0) {
                    $indice[] = $value;
                } else {
                    $valor[] = $value;
                }
                $i++;
            }
        } else {
            $indice = array();
            $valor = array();
        }

        //se existir indice e valor e se for par transforme em array
        if (count($indice) == count($valor) && !empty($indice) && !empty($valor)) {
            $this->params = array_combine($indice, $valor);
        } else {
            $this->params = $_POST;
        }
    }

    /**
     * 
     * @param type $nome
     * @return type
     */
    public function getParams($nome) {
        if ($this->params) {
            return $this->params[$nome];
        }
    }

    /**
     * 
     */
    public function run() {

        $objetoController = $this->obj;
        $actio = $this->action;

        if ($actio) {
            $objetoController->$actio();
        } else {
            die;
        }
    }

}
