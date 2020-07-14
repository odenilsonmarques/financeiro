
    $(document).ready(function () {
        jQuery.validator.addMethod("isString", function (value, element) {
            var regExp = /[0-9]/;
            if (regExp.test(value))
                return false;
            return true;
        },
                "Por Favor! Insira Somente Letras");
        //Na linha abaixo, quando o form for submetido ele faz o validate 
        $('#frmAdicionaLancamento').validate({
            //na linha abaixo sao criada as regras de validacao
            rules: {
                tipo_lancamento: {
                    required: true
                },
                pessoa: {
                    required: true,
                    minlength: 5
                },
                descricao: {
                    required: true,
                    minlength: 5
                },
                valor: {
                    required: true
                },
                data_vencimento: {
                    required: true
                },
                situacao: {
                    required: true
                },
                data_pagamento: {
                    required: true
                }
                
                
            },
            //na  linha abaixo sao criada as mensagem que serao vista pelo usuarios
            messages: {
                tipo_lancamento: {
                    required: "Campo Obrigatório*"
                },
                pessoa: {
                    required: "Campo Obrigatório*",
                    minlength: "Informe mais detalhes!"
                },
                descricao: {
                    required: "Campo Obrigatório*",
                    minlength: "Informe mais detalhes!"
                },
                valor: {
                    required: "Campo Obrigatório*"
                },
                data_vencimento: {
                    required: "Campo Obrigatório*"
                },
                situacao: {
                    required: "Campo Obrigatório*"
                },
                data_pagamento: {
                    required: "Campo Obrigatório*"
                }
            }
        });
    });