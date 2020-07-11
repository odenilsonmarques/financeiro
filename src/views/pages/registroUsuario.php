<html>
    <head>
        <title>Registro</title>
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
                            <h2>Cadastro de Usuário</h2><br/><br/>
                            <form method="POST" action="<?=$base;?>/registroUsuario">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                        <div class="col-lg-4">
                                            <?php if(!empty($flash)):?>
                                                <div class="alert alert-danger text-center"><?php echo $flash;?> </div>
                                            <?php endif;?>
                                            <div class="form-group">
                                                <label for="nome">Nome<span class="info">*</span></label><br />
                                                <input type="nome" name="nome" id="nome" class="form-control" autofocus="" required/><br/>

                                                <label for="email">Email<span class="info">*</span></label><br />
                                                <input type="email" name="email" id="email" class="form-control" autofocus="" required/><br/>

                                                <label for="senha">Senha<span class="info">*</span></label><br />
                                                <input type="password" name="senha" id="senha" class="form-control" required/><br/><br/>
                                                
                                                <button type="submit" class="btn btn-primary">Cadastrar<span class="glyphicon glyphicon-floppy-disk"></span></button><br/><br/>

                                                <a href="<?=$base;?>/loginUsuario">Ja tem cadastro? faça login</a>
                                            </div>
                                        </div>
                                    <div class="col-lg-4"></div>
                                </div>
                            </form>
                        </div>
                    </div>        
                </div>
            </section>
        <?=$render('footer');?>
    </body>
</html>
