<?php

namespace Empresa\Controller;

use Core\Controller;

/**
 * Description of EmpresaController
 *
 * @author paulo
 */
class EmpresaController extends Controller {

    public function indexAction() {
        $dados['nome'] = 'SoftEmp';
        return $this->view('index', $dados);
    }

}
