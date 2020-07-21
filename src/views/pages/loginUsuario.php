<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=$base;?>/assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?=$base;?>/assets/css/styleLogin.css">
        <link rel="stylesheet" href="<?=$base;?>/assets/css/styleFooter.css">
    </head>
    <body>
        <?=$render('headerLogin');?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Sistema Financeiro</h2><br/><br/>
                            <form method="POST" action="<?=$base;?>/loginUsuario" id="frmLogin">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                        <div class="col-lg-4">
                                            <?php if(!empty($flash)):?>
                                                <div class="alert alert-danger text-center"><?php echo $flash;?> </div>
                                            <?php endif;?>
                                            <div class="form-group">
                                                <label for="email">Email<span class="info">*</span></label><br />
                                                <input type="email" name="email" id="email" class="form-control" autofocus="" placeholder="Digite o e-mail" required/><br/>

                                                <label for="senha">Senha<span class="info">*</span></label><br />
                                                <input type="password" name="senha" id="senha"  class="form-control" placeholder="Digite a senha" required/><br/><br/>
                                                
                                                <button type="submit" class="btn btn-primary">Acessar<span class="glyphicon glyphicon-saved"></span></button><br/><br/>

                                                <a href="<?=$base;?>/registroUsuario">Cadastrar Novo Usuario</a>
                                            </div>
                                        </div>
                                    <div class="col-lg-4"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>        
            </div>
        </section>
        <?=$render('footer');?>
    </body>
</html>
