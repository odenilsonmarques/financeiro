<?php $render('headerEditaLancamento'); ?>
<?php require('../src/handlers/funcSelect.php'); ?>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                                <div class="panel-heading"><h3>Alteração de Lançamento</h3></div>
                                <div class="panel-body">
                                    <form method="POST" action="<?=$base;?>/editaLancamento/<?=$lancamento['id'];?>" name="" id="frmAdicionaLancamento">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="tipo_lancamento">Lancamento<span class="info">*</span></label><br />
                                                    <select name="tipo_lancamento" class="form-control" autofocus=""  required>
                                                        <option value="Despesa"<?php echo selected( 'Despesa', $lancamento['tipo_lancamento'] ); ?>>Despesa</option>
                                                        <option value="Receita"<?php echo selected( 'Receita', $lancamento['tipo_lancamento'] ); ?>>Receita</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="pessoa">Pessoa<span class="info">*</span></label><br />
                                                    <input type="text" name="pessoa" id="pessoa" value="<?=$lancamento['pessoa'];?>" class="form-control" data-minlength="3" required/>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Descricao<span class="info">*</span></label><br />
                                                    <input type="text" name="descricao" id="descricao" value="<?=$lancamento['descricao'];?>"  class="form-control" data-minlength="5" required/>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Valor<span class="info">*</span></label><br />
                                                    <input type="text" name="valor" id="valor" value="<?=$lancamento['valor'];?>"  class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label>Data do Vencimento<span class="info">*</span></label><br />
                                                        <input type="date" name="data_vencimento" id="data_vencimento" value="<?=$lancamento['data_vencimento'];?>" class="form-control"  required/>
                                                    </div>
                                                </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>status<span class="info">*</span></label><br />
                                                    <select name="situacao" id="situacao" class="form-control" onchange="mostrarDiv(this.value)" required>                                   
                                                        <option value="Pago"<?php echo selected('Pago', $lancamento['situacao']); ?>>Pago</option>
                                                        <option value="Pendente"<?php echo selected('Pendente', $lancamento['situacao']); ?>>Pendente</option>
                                                    </select><br/><br/>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"  id="dataPagamento">
                                                    <label>Data do Pagamento</label><br />
                                                    <input type="date" name="data_pagamento" id="data_pagamento" value="<?=$lancamento['data_pagamento'];?>"  class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-danger"><a href="<?=$base;?>/listaLancamento">Cancelar<span class="glyphicon glyphicon-remove"></span></a></button>
                                        <button type="submit" class="btn btn-success">Salvar<span class="glyphicon glyphicon-saved"></span></button>
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