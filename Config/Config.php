<?php
namespace Config;
/**
 * Conexão com Banco de Dados
 * @author paulo
 */
interface Config {

    // Configuracao do banco 
    const DATA_DRIVER = 'mysql';
    const DATA_HOST = 'localhost'; 
    const DATA_PORT = '3306';
    const DATA_USER = 'root';
    const DATA_PASS = 'k8xw37zl';
    const DATA_BASE = 'projeto_fase_3';
    
    //numero de linha para os select
    const SELECT_LINHAS = '3';
    //numero de link para os select
    const SELECT_LINKS = '3';
    
    //Configuração para emvio de email
    const EMAIL_AUTH = 'true';
    const EMAIL_HOST = 'smtp.floripaserver.com';
    const EMAIL_USER = 'paulo@floripaserver.com';
    const EMAIL_PASS = 'zlr5y21';
    const EMAIL_PORTA= '587';
    const EMAIL_NOME_REMETENTE = 'Paulo Roberto da Silva';
    const EMAIL_REMETENTE = 'paulo@floripaserver.com';
    
}
