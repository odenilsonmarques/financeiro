<?=$render('headerAdicionaLancamento');?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Cadastro de Lançamento</h3></div>
                            <div class="panel-body">
                                <form method="POST" action="<?=$base;?>/adicionaLancamento" name="" id="frmAdicionaLancamento">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="tipo_lancamento">Lancamento<span class="info">*</span></label><br />
                                                <select name="tipo_lancamento" id="tipo_lancamento" class="form-control" autofocus=""  required>
                                                    <option></option>
                                                    <option value="Despesa">Despesa</option>
                                                    <option value="Receita">Receita</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="pessoa">Pessoa<span class="info">*</span></label><br />
                                                <input type="text" name="pessoa" id="pessoa" class="form-control" data-minlength="3" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Descrição<span class="info">*</span></label><br />
                                                <input type="text" name="descricao" id="descricao" class="form-control" data-minlength="5" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Valor<span class="info">*</span></label><br />
                                                <input type="text" name="valor" id="valor" class="form-control" onKeyPress="return(currencyFormat(this,'','.',event))" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Data do Vencimento<span class="info">*</span></label><br />
                                                <input type="date" name="data_vencimento" id="data_vencimento" class="form-control"  required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>status<span class="info">*</span></label><br />
                                                <select name="situacao" id="situacao" class="form-control" onchange="mostrarDiv(this.value)" required>
                                                    <option></option>
                                                    <option value="Pago">Pago</option>
                                                    <option value="Pendente">Pendente</option>
                                                </select>
                                            </div>
                                        </div>                  
                                        <div class="col-lg-3">
                                            <div class="form-group" id="dataPagamento">
                                                <label>Data do Pagamento</label><br />
                                                <input type="date" name="data_pagamento" id="data_pagamento" class="form-control"/>
                                            </div>
                                        </div>
                                    </div><br /><br />
                                    <button class="btn btn-danger"><a href="<?=$base;?>/listaLancamento">Cancelar<span class="glyphicon glyphicon-remove"></span></a></button>
                                    <button type="submit" class="btn btn-success">Cadastrar<span class="glyphicon glyphicon-saved"></span></button><br/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php $render('footer'); ?>
    </body>
</html>