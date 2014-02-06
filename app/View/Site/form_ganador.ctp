<?php ?>

<div id="paso3" class="wrap">
            <div class="row">
                <div class="col-xs-6">
                    <h1 id="logo-home">
                        <img src="<?php echo $this->webroot; ?>images/Philly-Version3-1-assets/LOGO.png" alt="Carl's Jr Logo">
                    </h1>
                </div>
                <div class="col-xs-6">
                    <div class="cta-2 text-center">
                    <h2 class="altas">Gracias a tus amigos</h2>
                    <img class="philly_logo" src="<?php echo $this->webroot; ?>images/Philly-Version3-1-assets/Philly_Cheese_Steak.png" alt="hilly_Cheese_Steak">
                    <h1>¡Es tuya!</h1>
                    <h3>Ingresa tus datos para que te enviemos tu cupón</h3>
                    <?php 
                    echo $this->Form->create('Ganador');
                    echo $this->Form->input('Ganador.nombre',array('label' => 'Nombre: ','default' => $usuario['Usuario']['name'] ));
                    echo $this->Form->input('Ganador.email',array('label' => 'Correo electrónico: ','default' => $usuario['Usuario']['email']));
                    echo $this->Form->input('Ganador.sucursal',array('label' => 'Sucursal: ','empty' => true,'options' => array('Sucursal 1' => 'Sucursal 1', 'Sucursal 2' => 'Sucursal 2')));
                    echo $this->Form->hidden('Ganador.key',array('default' => $key));
                    echo $this->Form->end('Enviar');
                    ?>
                    <!--
                    <a href="" class="btn-cupon">Obtener mi cupón <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a>
                    <h5>* Cada uno de los ganadores se llevará 2 hamburguesas. <br> Sólo habrá 50 ganadores.</h5>-->
                </div>
                </div>
            </div>
        </div>
        <style>
            #GanadorFormGanadorForm label{
                width: 50%;
                text-align: right;
                margin-right: 10px;
            }
            #GanadorFormGanadorForm input , #GanadorFormGanadorForm select{
                width: 40%;
            }
            #GanadorFormGanadorForm input[type=submit]{
                float: right;
                margin-right: 16px;
            }
        </style>