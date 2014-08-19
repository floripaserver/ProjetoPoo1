/**
 * Created by paulo on 06/07/14.
 */
function mascara(o, f) {
    v_obj = o;
    v_fun = f;
    setTimeout("execmascara()", 1);
}

function execmascara() {
    v_obj.value = v_fun(v_obj.value);
}

function CpfCnpj(v) {

    // Remove tudo o que nao e numero
    v = v.replace(/\D/g, "");

    if (v.length < 14) { // CPF

        // Coloca um ponto entre o terceiro e o quarto digitos
        v = v.replace(/(\d{3})(\d)/, "$1.$2");

        // de novo (para o segundo bloco de numeros)
        v = v.replace(/(\d{3})(\d)/, "$1.$2");

        // Coloca um hifen entre o terceiro e o quarto digitos
        v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

    } else { // CNPJ

        // Coloca ponto entre o segundo e o terceiro digitos
        v = v.replace(/^(\d{2})(\d)/, "$1.$2");

        // Coloca ponto entre o quinto e o sexto digitos
        v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");

        // Coloca uma barra entre o oitavo e o nono digitos
        v = v.replace(/\.(\d{3})(\d)/, ".$1/$2");

        // Coloca um hifen depois do bloco de quatro digitos
        v = v.replace(/(\d{4})(\d)/, "$1-$2");

    }

    return v;

}
/*
$.validator.addMethod("cnpj", function(cnpj, element) {
    cnpj = $.trim(cnpj);// retira espaços em branco
    // DEIXA APENAS OS NÚMEROS
    cnpj = cnpj.replace('/', '');
    cnpj = cnpj.replace('.', '');
    cnpj = cnpj.replace('.', '');
    cnpj = cnpj.replace('-', '');

    var numeros, digitos, soma, i, resultado, pos, tamanho, digitos_iguais;
    digitos_iguais = 1;

    if (cnpj.length < 14 && cnpj.length < 15) {
        return false;
    }
    for (i = 0; i < cnpj.length - 1; i++) {
        if (cnpj.charAt(i) != cnpj.charAt(i + 1)) {
            digitos_iguais = 0;
            break;
        }
    }

    if (!digitos_iguais) {
        tamanho = cnpj.length - 2
        numeros = cnpj.substring(0, tamanho);
        digitos = cnpj.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;

        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2) {
                pos = 9;
            }
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0)) {
            return false;
        }
        tamanho = tamanho + 1;
        numeros = cnpj.substring(0, tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2) {
                pos = 9;
            }
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1)) {
            return false;
        }
        return true;
    } else {
        return false;
    }
}, "Informe um CNPJ válido."); // Mensagem padrão 
*/
$.validator.addMethod("cpf", function(value, element) {
    value = $.trim(value);

    value = value.replace('.', '');
    value = value.replace('.', '');
    cpf = value.replace('-', '');
    while (cpf.length < 11)
        cpf = "0" + cpf;
    var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
    var a = [];
    var b = new Number;
    var c = 11;
    for (i = 0; i < 11; i++) {
        a[i] = cpf.charAt(i);
        if (i < 9)
            b += (a[i] * --c);
    }
    if ((x = b % 11) < 2) {
        a[9] = 0;
    } else {
        a[9] = 11 - x;
    }
    b = 0;
    c = 11;
    for (y = 0; y < 10; y++)
        b += (a[y] * c--);
    if ((x = b % 11) < 2) {
        a[10] = 0;
    } else {
        a[10] = 11 - x;
    }

    var retorno = true;
    if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg))
        retorno = false;


    return this.optional(element) || retorno;

}, "Informe um CPF válido."); // Mensagem padrão
/*
$.validator.addMethod("dateBR", function(value, element) {
    //contando chars
    if (value.length != 10)
        return false;
    // verificando data
    var data = value;
    var dia = data.substr(0, 2);
    var barra1 = data.substr(2, 1);
    var mes = data.substr(3, 2);
    var barra2 = data.substr(5, 1);
    var ano = data.substr(6, 4);
    if (data.length != 10 || barra1 != "/" || barra2 != "/" || isNaN(dia) || isNaN(mes) || isNaN(ano) || dia > 31 || mes > 12)
        return false;
    if ((mes == 4 || mes == 6 || mes == 9 || mes == 11) && dia == 31)
        return false;
    if (mes == 2 && (dia > 29 || (dia == 29 && ano % 4 != 0)))
        return false;
    if (ano < 1900)
        return false;
    return true;
}, "Informe uma data válida");  // Mensagem padrão

$.validator.addMethod("dateTimeBR", function(value, element) {
    //contando chars
    if (value.length != 16)
        return false;
    // dividindo data e hora
    if (value.substr(10, 1) != ' ')
        return false; // verificando se há espaço
    var arrOpcoes = value.split(' ');
    if (arrOpcoes.length != 2)
        return false; // verificando a divisão de data e hora
    // verificando data
    var data = arrOpcoes[0];
    var dia = data.substr(0, 2);
    var barra1 = data.substr(2, 1);
    var mes = data.substr(3, 2);
    var barra2 = data.substr(5, 1);
    var ano = data.substr(6, 4);
    if (data.length != 10 || barra1 != "/" || barra2 != "/" || isNaN(dia) || isNaN(mes) || isNaN(ano) || dia > 31 || mes > 12)
        return false;
    if ((mes == 4 || mes == 6 || mes == 9 || mes == 11) && dia == 31)
        return false;
    if (mes == 2 && (dia > 29 || (dia == 29 && ano % 4 != 0)))
        return false;
    // verificando hora
    var horario = arrOpcoes[1];
    var hora = horario.substr(0, 2);
    var doispontos = horario.substr(2, 1);
    var minuto = horario.substr(3, 2);
    if (horario.length != 5 || isNaN(hora) || isNaN(minuto) || hora > 23 || minuto > 59 || doispontos != ":")
        return false;
    return true;
}, "Informe uma data e uma hora válida");
*/
$(document).ready(function() {

    $('form').validate({
        rules: {
            nome: {
                minlength: 5,
                maxlength: 255,
                required: true
            },
            // Pegando o campo CPF para inserir regras de validação
            cpf: {
                // o required faz com que o preenchimento do campo sejá obrigatório
                required: true,
                // o cpf faz com que o cpf digitado seja um cpf valido
                cpf: 'both'
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            nome: {
                required: 'Nome é obrigatório!',
                minlength: 'Mínimo 5 dígitos',
                maxlength: 'Máximo 200 dígitos'
            },
            // Seleciona as mensagens do campo CPF
            cpf: {
                // Atribui uma mensagem padrão para o required do CPF
                required: "O CPF é obrigatório.",
                // Atribui uma mensagem padrão para a função CPF do campo CPF
                cpf: "O CPF digitado é invalido"
            },
            email: {
                required: 'Email é obrigatório!',
                email: 'Entre com um email válido!'
            }
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        //focusInvalid: false,
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

});