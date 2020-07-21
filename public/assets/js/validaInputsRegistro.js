
    $(document).ready(function () {
        
        jQuery.validator.addMethod("isString", function (value, element) {
            var regExp = /[0-9]/;
            if (regExp.test(value))
                return false;
            return true;
        },
                "Por Favor! Insira Somente Letras");
        //Na linha abaixo, quando o form for submetido ele faz o validate 
        $('#frmRegistro').validate({
            //na linha abaixo sao criada as regras de validacao
            rules: {
                nome: {
                    required: true,
                    maxlength: 20,
                    isString: true
                },
                email: {
                    required: true
                },
                senha: {
                    required: true
                }
            },
            //na  linha abaixo sao criada as mensagem que serao vista pelo usuarios
            messages: {
                nome: {
                    required: "Campo Obrigatório*",
                    maxlength: "Nome inválido, insiria no maxino  20 caractere!"
                },
                email: {
                    required: "Campo Obrigatório*",
                    email: "Insira um email válido"
                },
                senha: {
                    required: "Campo Obrigatório*"   
                }
            }
        });
    });