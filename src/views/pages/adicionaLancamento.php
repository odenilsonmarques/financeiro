<?=$render('header', ['logaUsuario'=>$logaUsuario]);?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>Cadastro de Lançamento</h3><br/>
            <form method="POST" action="<?=$base;?>/adicionaLancamento">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="tipo_lancamento">Lancamento<span class="info">(obrigatório)</span></label><br />
                            <select name="tipo_lancamento" class="form-control" autofocus="" required>
                                <option></option>
                                <option value="Despesa">Despesa</option>
                                <option value="Receita">Receita</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="pessoa">Pessoa<span class="info">(obrigatório)</span></label><br />
                            <input type="text" name="pessoa" id="pessoa" class="form-control" required min="3" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Descricao<span class="info">(obrigatório)</span></label><br />
                            <input type="text" name="descricao" id="descricao" class="form-control" required/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>Valor<span class="info">(obrigatório)</span></label><br />
                            <input type="text" name="valor" id="valor" class="form-control" required step="0.01" min="0.01"/>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>status<span class="info">(obrigatório)</span></label><br />
                            <select name="situacao" id="situacao" class="form-control" required>
                                <option></option>
                                <option value="Pagar">Conta Paga</option>
                                <option value="Receber">valor recebido</option>
                                <option value="Pedente">Pendente</option>
                            </select><br/><br/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Data do Vencimento<span class="info">(obrigatório)</span></label><br />
                            <input type="date" name="data_vencimento" id="data_vencimento" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Data do Pagamento</label><br />
                            <input type="date" name="data_pagamento" id="data_pagamento" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <button type="submit"class="btn btn-success">Cadastrar<span class="glyphicon glyphicon-saved"></span></button>
                <button class="btn btn-danger"><a href="<?=$base;?>/listaLancamento">Lançamentos<span class="glyphicon glyphicon-remove"></span></a></button><br/>
            </form>
        </div>
    </div>
</div>

<?php $render('footer'); ?>