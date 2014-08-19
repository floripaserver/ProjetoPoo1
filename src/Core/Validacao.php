<?php
namespace Core;
/**
 * Description of Validacao
 *
 * @author paulo
 */
class Validacao {
    
    /**
     * 2014-03-28
     *
     * remove ( "<", ">", "\\", "/", "=", "'", "?", "(", ")", "-", " ", ".")
     * 
     * @param type $limpar
     * @return type
     */
    public static function limparFormatacao($limpar) {

        $limpar = str_replace(array("<", ">", "\\", "/", "=", "'", "?", "(", ")", "-", " ", "."), "", $limpar);

        return (string)$limpar;
    }
}
