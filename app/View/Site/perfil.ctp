<?php  
$ingredientesTotal = $ingredientes;
?>
<!--Soy <?php echo $usuario['Usuario']['name']; ?>
<ul classs="ingredientes">
    <?php
    foreach ($usuario['UsuarioIngrediente'] as $ku => $ui) {
        ?>
        <li><?php echo $ui['usuario_regalo_facebook_id']; ?> te regaló <?php echo $ingredientes[$ui['ingrediente_id']]['Ingrediente']['nombre']; ?> de tu ChesseSteak;</li>
        <?php
        //unset($ingredientes[$ui['ingrediente_id']]);
    }
    foreach ($ingredientes as $k => $i) {
        ?>
        <li><?php echo $i['Ingrediente']['nombre']; ?> | <a href="#" id="ingrediente_<?php echo $i['Ingrediente']['id']; ?>"class="regalar">Regalar</a></li>
        <?php
    }
    ?>    
</ul>-->

<input type="hidden" id="perfilId" value="<?php echo $this->params->params['pass'][0]; ?>"/>
<?php
?>
<div id="paso2" class="wrap">
    <div class="row">
        <div class="col-xs-6">
            <h1 id="logo-home">
                <img src="<?php echo $this->webroot; ?>images/Philly-Version3-1-assets/LOGO.png" alt="Carl's Jr Logo">
            </h1>
        </div>
        <div class="col-xs-6">
            <img class="philly_logo" src="<?php echo $this->webroot; ?>images/Philly-Version3-1-assets/Philly_Cheese_Steak.png" alt="hilly_Cheese_Steak">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">
            <div class="usuario text-center">
                <h2>SOY <?php echo $usuario['Usuario']['name']; ?></h2>	
                <h3>¿Me regalas una Philly CheeseSteak Burger?</h3>
                <p>Lo que tienes que hacer es seleccionar un ingrediente y cuando la hamburguesa esté completa podré cambiarla gratis en Carl´s Jr.  </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <div class="ingrediente-desc text-center">
                <ul>
                    <?php foreach($ingredientesTotal as $ki => $i){ ?>
                        <li id="ingr-desc-<?php echo $i['Ingrediente']['id']; ?>" class=" ingr-desc <?php echo ($ki == 1) ? 'active' : ''; ?>">
                            <h3><?php echo $i['Ingrediente']['nombre']; ?></h3>
                            <!--<p><?php echo $i['Ingrediente']['descripcion']; ?></p>-->
                        </li>
                    <?php } ?>
                    <!--<li id="ingr-desc-1" class="active">
                        <h3>Delgadas tiras de carne de res:</h3>
                        <p>Exquisita y jugosa carne de res, sasonada con los mejores ingredientes.	</p>
                    </li>
                    <li id="ingr-desc-2">
                        <h3>Delgadas tiras de carne de res:</h3>
                        <p>Exquisita y jugosa carne de res, sasonada con los mejores ingredientes.	</p>
                    </li>
                    <li id="ingr-desc-3">
                        <h3>Delgadas tiras de carne de res:</h3>
                        <p>Exquisita y jugosa carne de res, sasonada con los mejores ingredientes.	</p>
                    </li>
                    <li id="ingr-desc-4">
                        <h3>Delgadas tiras de carne de res:</h3>
                        <p>Exquisita y jugosa carne de res, sasonada con los mejores ingredientes.	</p>
                    </li>
                    <li id="ingr-desc-5">
                        <h3>Delgadas tiras de carne de res:</h3>
                        <p>Exquisita y jugosa carne de res, sasonada con los mejores ingredientes.	</p>
                    </li>
                    <li id="ingr-desc-6">
                        <h3>Delgadas tiras de carne de res:</h3>
                        <p>Exquisita y jugosa carne de res, sasonada con los mejores ingredientes.	</p>
                    </li>
                    <li id="ingr-desc-7">
                        <h3>Delgadas tiras de carne de res:</h3>
                        <p>Exquisita y jugosa carne de res, sasonada con los mejores ingredientes.	</p>
                    </li>-->
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div id="hamburguesa">
                <?php
                /*foreach ($usuario['UsuarioIngrediente'] as $ku => $ui) {
                    ?>
                    <div id="ingr-<?php echo $ui['ingrediente_id']; ?>" class="icon-ingr" >
                        <!--<?php echo $ui['usuario_regalo_facebook_id']; ?> te regaló <?php echo $ingredientes[$ui['ingrediente_id']]['Ingrediente']['nombre']; ?> de tu ChesseSteak;-->
                        <a  href=""></a>
                    </div>
                    <?php
                    unset($ingredientes[$ui['ingrediente_id']]);
                }*/
                foreach ($ingredientes as $k => $i) {
                    ?>
                    <div id="ingr-<?php echo $i['Ingrediente']['id']; ?>" class="icon-ingr">
                        <!--<?php echo $i['Ingrediente']['nombre']; ?> | <a href="#" id="ingrediente_<?php echo $i['Ingrediente']['id']; ?>"class="regalar">Regalar</a>-->
                        <a  href="" class="<?php echo ($i['Ingrediente']['id'] >= 5) ? 'right-link' : ''; ?>"></a>
                    </div>
                    <?php
                }
                ?>    
                <!--<div id="ingr-1" class="icon-ingr">
                    <a  href=""></a>
                </div>
                <div id="ingr-2" class="icon-ingr">
                    <a  href=""></a>
                </div>
                <div id="ingr-3" class="icon-ingr">
                    <a  href=""></a>
                </div>
                <div id="ingr-4" class="icon-ingr">
                    <a  href=""></a>
                </div>
                <div id="ingr-5" class="icon-ingr">
                    <a class="rigth-link" href=""></a>
                </div>
                <div id="ingr-6" class="icon-ingr">
                    <a class="rigth-link" href=""></a>
                </div>
                <div id="ingr-7" class="icon-ingr">
                    <a class="rigth-link" href=""></a>
                </div>-->
                <div id="mensaje-ingredientes" class="text-center">
                    <h5>* Cada uno de los ganadores se llevará 2 hamburguesas. Sólo habrá 50 ganadores.</h5>
                </div>
            </div>
        </div>
    </div>
    <div id="ingredientes-footer">
        <ul>
            <?php for($i = 1; $i <= 7; $i++){ ?>
                <li id="ingr-foot-<?php echo $ingredientes[$i]['Ingrediente']['id']; ?>" class="ingr-foot descr-foot <?php echo (isset($usuario['UsuarioIngrediente'][$i])) ? 'lotienes' : 'inactivo' ?>">
                    <div class="mask"></div>
                    <div class="head-ingr">
                        <h5><?php echo $ingredientes[$i]['Ingrediente']['nombre']; ?></h5>
                    </div>
                    <div class="body-ingr">
                        <?php if(isset($usuario['UsuarioIngrediente'][$i])){ ?>
                            <div class="teregalo" id="regalo-<?php echo $usuario['UsuarioIngrediente'][$i]['usuario_regalo_facebook_id']?>">
                                <strong><i class="fa fa-check"></i><span></span></strong>
                                <p>regaló <b><?php echo $ingredientes[$i]['Ingrediente']['nombre']; ?></b> de tu CheeseSteak</p>
                            </div>
                        <?php }else{ ?>
                            <a href="" id="ingrediente_<?php echo $ingredientes[$i]['Ingrediente']['id']; ?>" class="regalar regalarBack btn-ingr">Regalar</a>
                            <!--<a href="" class="btn-ingr solicitar">Solicitar</a>-->
                        <?php } ?>
                    </div>
                </li>
            <?php } ?>
            
        </ul>
    </div>

</div>
<script type="text/javascript" >
$(document).on('ready',function(){
    $(".icon-ingr a").on('mouseenter',function(){
        var id = $(this).parent().attr('id').replace('ingr-','');
        $(".ingr-desc").hide();
        $("#ingr-desc-"+id).show();
        $(".ingr-foot").removeClass('activo');
        $("#ingr-foot-"+id).addClass('activo');
    });
    $(".ingr-foot").on('mouseenter',function(){
        var id = $(this).attr('id').replace('ingr-foot-','');
        $(".ingr-desc").hide();
        $("#ingr-desc-"+id).show();
        $(".ingr-foot").removeClass('activo');
        $("#ingr-foot-"+id).addClass('activo');
    });
});
</script>