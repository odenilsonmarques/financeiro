<?php $render('headerLancamentos'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>Alteração de Lançamento</h3><br/>
            <form method="POST" action="<?=$base;?>/editaLancamento/<?=$lancamento['id'];?>">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="tipo_lancamento">Lancamento</label><br />
                            <select name="tipo_lancamento" class="form-control" autofocus="">
                                <option>Selecione</option>
                                <option value="Despesa">Despesa</option>
                                <option value="Receita">Receita</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="pessoa">Pessoa</label><br />
                            <input type="text" name="pessoa" id="pessoa" value="<?=$lancamento['pessoa'];?>" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Descricao</label><br />
                            <input type="text" name="descricao" id="descricao" value="<?=$lancamento['descricao'];?>"  class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>Valor</label><br />
                            <input type="text" name="valor" id="valor" value="<?=$lancamento['valor'];?>"  class="form-control"/>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>status</label><br />
                            <select name="situacao" id="situacao" class="form-control">
                                <option>Selecione</option>
                                <option value="Pagar">Conta Paga</option>
                                <option value="Receber">valor recebido</option>
                                <option value="Pedente">Pendente</option>
                            </select><br/><br/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Data do Vencimento</label><br />
                            <input type="date" name="data_vencimento" id="data_vencimento" value="<?=$lancamento['data_vencimento'];?>" class="form-control"/>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Data do Pagamento</label><br />
                            <input type="date" name="data_pagamento" id="data_pagamento" value="<?=$lancamento['data_pagamento'];?>"  class="form-control"/>
                        </div>
                    </div>
                </div>
                <button type="submit"class="btn btn-success">Salvar<span class="glyphicon glyphicon-saved"></span></button>
                <button class="btn btn-danger"><a href="<?=$base;?>/listaLancamento">Lançamentos<span class="glyphicon glyphicon-remove"></span></a></button><br/>
            </form>
        </div>
    </div>
</div>









<?php $render('footer'); ?>