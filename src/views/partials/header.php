<html>
    <head>
        <title>Financeiro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=$base;?>/assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?=$base;?>/assets/css/styleHeader.css">
        <link rel="stylesheet" href="<?=$base;?>/assets/css/styleFooter.css">
        <link rel="stylesheet" href="<?=$base;?>/assets/css/styleForm.css">
        <link rel="stylesheet" href="<?=$base;?>/assets/css/styleLogin.css">
    </head>
    <body>
        <header>
            <div class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">Financeiro</a>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav navbar-right"> 
                                    <li><a href="#">Olá - <?=$logaUsuario->nome;?></a></li>
                                    <li><a href="<?=$base;?>/listaLancamento">Lancamentos</a></li>
                                    <li><a href="<?=$base;?>/adicionaLancamento">Cadastrar Lancamento</a></li>
                                    <li><a href="<?=$base;?>/sair">Sair</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>        
                </div>
            </div><br/>
        </header>

        