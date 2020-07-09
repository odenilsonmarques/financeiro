<?=$render('header', ['logaUsuario'=>$logaUsuario]);?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-center" style="border:1px solid red">
                <h3>Despesa</h3>
                <?=($lancamentodespesa);?>
                <span class="glyphicon glyphicon-usd"></span> 
            </div>
            <div class="col-lg-4  text-center" style="border:1px solid red">
                <h3>soma Total</h3>
                <span class="glyphicon glyphicon-usd" ></span>
                <?=($lancamentosoma);?>
            </div>
            <div class="col-lg-4  text-center" style="border:1px solid red">
                <h3>lancamentos</h3>
                <span class="glyphicon glyphicon-usd"></span>
                <?=count($lancamento);?>
            </div>
        </div>
    </div>
</section>