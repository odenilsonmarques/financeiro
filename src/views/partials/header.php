<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <h2>Bem - vindo !</h2>
        <form>
            <label>Email</label><br />
            <input type="email" name="email" id="email" /><br/><br/>

            <label>Senha</label><br />
            <input type="text" name="senha" id="senha" /><br/><br/>
        
            <input type="submit" value="Logar"/><br/><br/>

            <a href="<?=$base;?>/listaLancamento">Lacamentos</a>
        </form>
    </body>
</html>