<?php

namespace Contato\Controller\Publica;

use Core\Controller;
use Contato\Model\Publica\ContatoModel;
use Core\Email;

/**
 * Description of Contato
 *
 * @author paulo
 */
class ContatoController extends Controller {

    public function indexAction() {

        if ($_POST) {
            if ($this->getParams('nome') &&
                    $this->getParams('email') &&
                    $this->getParams('assunto') &&
                    $this->getParams('mensagem')) {
                $dados = [
                    'nome' => $this->getParams('nome'),
                    'email' => $this->getParams('email'),
                    'assunto' => $this->getParams('assunto'),
                    'mensagem' => $this->getParams('mensagem')
                ];

                $insert = $this->setContatoModel()->cadastrar($dados);

                if ($insert) {

                    $enviarEmail = new Email;

                    $enviarEmail->nomeEmail = $this->getParams('nome');
                    $enviarEmail->paraEmail = $this->getParams('email');
                    $enviarEmail->assuntoEmail = $this->getParams('assunto');
                    $enviarEmail->conteudoEmail = $this->getParams('mensagem');

                    //$enviarEmail->mensagem = "Email com sucesso.";

                    $dados['statusEmail'] = $enviarEmail->enviar();
                } else {
                    $dados['statusEmail'] = "<span class=\"alert-error\">Erro ao cadastrar</span>";
                }
            } else {
                $dados['statusEmail'] = "<span class=\"alert-error\">Todos os campos são obrigatorio</span>";
            }
        }
        return $this->view('index', $dados);
    }

    private function setContatoModel() {
        return new ContatoModel;
    }

    private function setEmail() {
        return new Email;
    }

}
