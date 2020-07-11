<?=$render('headerHome', ['logaUsuario'=>$logaUsuario]);?>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3  text-center">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Total de Lancamentos</h4></div>
                                <div class="panel-body">
                                    <span>
                                        <?=count($lancamentos);?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3  text-center">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Soma Total</h4></div>
                                <div class="panel-body">
                                    <span>R$
                                        <?=($somaLancamento);?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3  text-center">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Total Receita</h4></div>
                                <div class="panel-body">
                                    <span>R$
                                        <?=($receitaLancamento);?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3  text-center">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Total Despesa</h4></div>
                                <div class="panel-body">
                                    <span>R$
                                        <?=($despesaLancamento);?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?=$render('footer');?>
    </body>
</html>

