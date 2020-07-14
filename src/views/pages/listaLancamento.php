<?=$render('headerLancamentos');?>

        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-hover table-striped"> 
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>TIPO DE LANCAMENTO</th>
                                    <th>PESSOA</th>
                                    <th>DESCRICAO</th>
                                    <th>VALOR</th>
                                    <th>VENCIMENTO</th>
                                    <th>SITUAÇÃO</th>
                                    <th>PAGAMENTO</th>
                                    <th>AÇÃO</th>
                                </tr>
                            </thead>
                            <?php foreach ($lancamentos as $lancamento):?>
                                <tr>
                                    <td><?=$lancamento['id'];?></td>
                                    <td><?=$lancamento['tipo_lancamento'];?></td>
                                    <td><?=$lancamento['pessoa'];?></td>
                                    <td><?=$lancamento['descricao'];?></td>
                                    <td><?=$lancamento['valor'];?></td>
                                    <td><?=date('d/m/Y',strtotime($lancamento['data_vencimento']));?></td>
                                    <td><?=$lancamento['situacao'];?></td>
                                    <?php 
                                        if(!empty($lancamento['data_pagamento'])){?>
                                            <td><?=date('d/m/Y',strtotime($lancamento['data_pagamento']));?></td>
                                    <?php } else {?>
                                        <td></td>
                                    <?php } ?>
                                    <td>
                                        <a href="<?=$base;?>/editaLancamento/<?=$lancamento['id'];?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="<?=$base;?>/deletaLancamento/<?=$lancamento['id'];?>" onclick = "return confirm('DESEJA CONFIRMAR A EXCLUSÃO ?')"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <?php $render('footer');?>
    </body>
</html>


