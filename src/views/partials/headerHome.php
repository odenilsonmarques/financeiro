<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=$base;?>/assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?=$base;?>/assets/css/styleHome.css">
        <link rel="stylesheet" href="<?=$base;?>/assets/css/styleFooter.css">
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
                                    <li><a href="<?=$base;?>">Olá - <?=$logaUsuario->nome;?><span class="glyphicon glyphicon-user"></a></li>
                                    <li><a href="<?=$base;?>/listaLancamento">Lancamentos<span class="glyphicon glyphicon-list"></span></a></li>
                                    <li><a href="<?=$base;?>/adicionaLancamento">Cadastrar Lancamento<span class="glyphicon glyphicon-plus"></span></a></li>
                                    <li><a href="<?=$base;?>/sair">Sair<span class="glyphicon glyphicon-off"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>        
                </div>
            </div><br/>
        </header>

        