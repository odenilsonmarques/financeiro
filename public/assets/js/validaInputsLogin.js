
    $(document).ready(function () {
        
        //Na linha abaixo, quando o form for submetido ele faz o validate 
        $('#frmLogin').validate({
            //na linha abaixo sao criada as regras de validacao
            rules: {
                email: {
                    required: true
                },
                senha: {
                    required: true
                }
            },
            //na  linha abaixo sao criada as mensagem que serao vista pelo usuarios
            messages: {
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