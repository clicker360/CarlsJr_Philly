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
<table>
	<tr>
		<td>	
		¡Felicidades <?php echo $perfil['Ganador']['nombre']; ?>!		
		</td>
	</tr>
	<tr>
		<td>	
		Ya tienes tus dos Phillys CheeseSteake de Carl's Jr.		
		</td>
	</tr>
	<tr>
		<td>	
		Imprime este cupón y canjéalo en la sucursal <?php echo $perfil['Ganador']['sucursal'].', '.$perfil['Ganador']['estado']; ?>.		
		</td>
	</tr>
	<tr>
		<td>	
		¡Gracias por participar y sigue pendiente de nuestras próximas promociones!		
		</td>
	</tr>	
</table>