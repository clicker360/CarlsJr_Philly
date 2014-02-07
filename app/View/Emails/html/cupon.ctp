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
 * @package       app.View.Emails.html
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<html>
<head>
<title>Carl´s Jr</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<body bgcolor="#EEE">
<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; padding:0; font-family:Arial, Helvetica, sans-serif;">
    
    <tr>
        <td colspan="2" align="center"><font size="+5" color="#000000"><img src="<?php echo $this->Html->url('/img/mail/',true); ?>/Felicidades_01.jpg" alt="Carl&acute;s Jr" border="0" style="display:block;"></font></td>
    </tr>
    
    <tr>
        <td colspan="2" align="center"><font size="+5" color="#000000"><img src="<?php echo $this->Html->url('/img/mail/',true); ?>/Felicidades_02.jpg" alt="Carl&acute;s Jr" border="0" style="display:block;"></font></td>
    </tr>
    
    <tr>
        <td colspan="2" align="center">
            <table width="600" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse; padding:0; font-family:Arial, Helvetica, sans-serif;">
  <tr>
    <th scope="col" width="50"><img src="<?php echo $this->Html->url('/img/mail/',true); ?>/Felicidades_05.jpg" alt="Carl&acute;s Jr" border="0" style="display:block;"></th>
    <th scope="col" width="500" valign="top">
        <h1 style="font-size:21px; font-weight:normal; color:#000000; margin:8px 0 0 0; padding:0;"><strong style="font-size: 24px;"><?php echo $perfil['Ganador']['nombre']; ?></strong><br>YA TIENES TUS DOS<br>
PHILLYS CHEESESTEAKE<br>
DE CARL&acute;S JR.</h1>
        <p style="font-size:18px; font-weight:lighter; color:#666;">Imprime este correo y canj&eacute;alo en la sucursal:</p>
        <p style="font-size:18px; font-weight:lighter; color:#666;"><strong><?php echo $perfil['Ganador']['sucursal'].', '.$perfil['Ganador']['estado']; ?></strong></p>
        <h2 style="font-size:18px; font-weight:normal; color:#e40b38; margin:25px 0 0 0; padding:0;"><strong>&iexcl;GRACIAS POR PARTICIPAR Y SIGUE PENDIENTE<br>
DE NUESTRAS PR&Oacute;XIMAS PROMOCIONES&#33;</strong></h2>
    </th>
    <th scope="col" width="50"><img src="<?php echo $this->Html->url('/img/mail/',true); ?>/Felicidades_04.jpg" alt="Carl&acute;s Jr" border="0" style="display:block;"></th>
  </tr>
</table>
        </td>
    </tr>
    
    <tr>
        <td colspan="2" align="center"><font size="+5" color="#000000"><img src="<?php echo $this->Html->url('/img/mail/',true); ?>/Felicidades_07.jpg" alt="Carl&acute;s Jr" border="0" style="display:block;"></font></td>
    </tr>
    
    <tr>
        <td colspan="2" align="center"><font size="+5" color="#000000"><img src="<?php echo $this->Html->url('/img/mail/',true); ?>/Felicidades_08.jpg" alt="Carl&acute;s Jr" border="0" style="display:block;"></font></td>
    </tr>
    
    <tr bgcolor="#e40b38">
        <td colspan="2" align="center" style="padding:0 40px;">
        <p style="font-size:9px; color:#FFF; margin:20px 0;">Vigencia hasta el 28 de febrero de 2014. V&aacute;lido en todos los restaurantes participantes en la Rep&uacute;blica Mexicana. Un cup&oacute;n por persona por oferta. Un cup&oacute;n por cliente, por visita. S&oacute;lo una oferta por cup&oacute;n. No v&aacute;lido en otras promociones u ofertas.</p></td>
    </tr>
    
</table>

</body>
</html>