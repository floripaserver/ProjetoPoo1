<?php

namespace Core;

use PHPMailer;
use Config\Config;

/**
 * Description of Email
 *
 * @author paulo
 */
//class Email extends PHPMailer implements Config {
class Email implements Config {

    private $smtpAuth = self::EMAIL_AUTH;
    private $configHost = self::EMAIL_HOST;
    private $configPort = self::EMAIL_PORTA;
    private $configUsuario = self::EMAIL_USER;
    private $configSenha = self::EMAIL_PASS;
    public $nomeEmail;
    public $paraEmail;
    public $assuntoEmail;
    public $conteudoEmail;
    public $anexo;
    public $copiaEmail;
    public $copiaOculta;
    public $copiaNome;
    public $nomeCopiaOculta;
    private $remetenteEmail = self::EMAIL_REMETENTE;
    private $remetenteNome = self::EMAIL_NOME_REMETENTE;
    public $confirmacao = 1;
    public $mensagem = 'Email enviado com sucesso.';
    public $erroMsg = 'Erro ao enviar o email, tente novamente.';
    public $confirmacaoErro = 1;

    public function enviar() {

        // Inicia a classe PHPMailer
        $mail = new PHPMailer();

        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;

        // Define os dados do servidor e tipo de conexão
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsSMTP(); // Define que a mensagem será SMTP

        if ($this->smtpAuth == true) {

            $mail->Host = $this->configHost; // Endereço do servidor SMTP
            $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
            $mail->Port = $this->configPort;
            $mail->Username = $this->configUsuario; // Usuário do servidor SMTP
            $mail->Password = $this->configSenha; // Senha do servidor SMTP
        }

        // Define o remetente
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->From = $this->remetenteEmail; // Seu e-mail
        $mail->FromName = $this->remetenteNome; // Seu nome
        // Define os destinatário(s)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        if (isset($this->paraEmail)) {

            $mail->AddAddress('' . $this->paraEmail . '', '' . $this->nomeEmail . '');
        }

        if (isset($this->copiaEmail)) {

            $mail->AddCC('' . $this->copiaEmail . '', '' . $this->copiaNome . ''); // Copia
        }

        if (isset($this->copiaOculta)) {

            $mail->AddBCC('' . $this->copiaOculta . '', '' . $this->nomeCopiaOculta . ''); // Cópia Oculta
        }

        // Define os dados técnicos da Mensagem
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
        $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
        // Define a mensagem (Texto e Assunto)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->Subject = "" . $this->assuntoEmail . ""; // Assunto da mensagem
        $mail->Body = "" . $this->conteudoEmail . ""; // Conteudo da mensagem a ser enviada
        //$mail->AltBody = "Por favor verifique seu leitor de email.";
        // Define os anexos (opcional)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        if (!empty($this->anexo)) {

            $mail->AddAttachment("" . $this->anexo . "");  // Insere um anexo
        }

        // Envia o e-mail
        $enviado = $mail->Send();

        // Limpa os destinatários e os anexos
        $mail->ClearAllRecipients();
        $mail->ClearAttachments();

        // Exibe uma mensagem de resultado
        if ($this->confirmacao == 1) {

            if ($enviado) {

                $result = "<span class=\"alert-success\">{$this->mensagem}</span>";
            } else {

                $result = "<span class=\"alert-error\">{$this->erroMsg}</span>";

                if ($this->confirmacaoErro == 1) {

                    $result = "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
                }
            }
        }

        return $result;
    }

}
