<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Carl´s Jr</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>    
        <?php 
        echo $this->Html->css('libs/bootstrap');
        echo $this->Html->css('fonts/font-awesome/css/font-awesome.min');
        echo $this->Html->css('style');
        echo $this->Html->script('libs/modernizr-2.6.2-respond-1.1.0.min');
        ?>
        <!--<link rel="stylesheet" href="library/css/libs/bootstrap.css">
        <link rel="stylesheet" href="library/fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="library/css/style.css">
        <script src="library/js/libs/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>        
        <?php
        $js = array();
        switch (strtolower($this->params->params['action'])) {
            case 'index':
                $js[] = 'facebook.index';
                break;
            case 'perfil':
                $js[] = 'facebook.perfil';
                break;
            case 'form_ganador':
                $js[] = 'form_ganador';
                break;
        }
        echo $this->Html->script($js);
        ?>
        
    <div id="fb-root"></div>
    <script>

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    

</head>
<body>
    <!--[if lt IE 7]>
                            <p class="chromeframe">
                                    Estas usando un navegador muy <strong>viejo</strong>. Por favor <a href="http://browsehappy.com/"> actualiza </a> tu navegador o activa el  <a href="http://www.google.com/chromeframe/?redirect=true">Frame de Google Chrome</a>
    <![endif]-->
<?php echo $this->Session->flash(); ?>

<?php echo $this->fetch('content'); ?>

    <footer class="footer">
        <div class="wrap">
            <div class="row">
                <div class="col-xs-6">
                    <p class="text-left">
                        <a href="#">Términos y condiciones</a>
                    </p>
                </div>
                <div class="col-xs-6">
                    <p class="text-right" >
                        <a href="#">Políticas de privacidad</a>	
                    </p>
                </div>
            </div>
        </div>		
    </footer>
    <?php if(in_array(strtolower($this->params->params['action']), array('index','perfil'))){ ?>
    <script type="text/javascript">
        var facebook = $.facebook(
                '<?php echo Configure::read('Facebook.appId'); ?>',
                true,
                true,
                '<?php echo $this->Html->url('/',true) ?>'
                );
        window.fbAsyncInit = function() {
            facebook.init();
        };
    </script>
    <?php } ?>
    
    <?php 
    echo $this->Html->css('libs/bootstrap');
    echo $this->Html->css('fonts/font-awesome/css/font-awesome.min');
    echo $this->Html->css('style');
    echo $this->Html->script('libs/bootstrap.min');
    echo $this->Html->script('plugins');
    echo $this->Html->script('main');
    ?>
    <!--<script src="library/js/libs/jquery-1.10.1.min.js"></script>

    <script src="library/js/libs/bootstrap.min.js"></script>

    <script src="library/js/plugins.js"></script>
    <script src="library/js/main.js"></script>-->

    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script>

    <script>
        var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
        (function(d, t) {
            var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
            g.src = '//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g, s)
        }(document, 'script'));
    </script>
</body>
</html>
