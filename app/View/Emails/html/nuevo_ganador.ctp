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
		<td colspan="2">
			Hay un nuevo ganador de una Philly, estos son sus datos:
		</td>
	</tr>
	<tr>
		<td>
			Nombre :
		</td>
		<td>
			<?php echo $perfil['Usuario']['name']; ?>
		</td>
	</tr>
	<tr>
		<td>
			Correo electrónico :
		</td>
		<td>
			<?php echo $perfil['Usuario']['email']; ?>
		</td>
	</tr>
	<tr>
		<td>
			Facebook :
		</td>
		<td>
			<?php echo $perfil['Usuario']['url']; ?>
		</td>
	</tr>
	<tr>
		<td>
			La liga donde tiene que ingresar sus datos :
		</td>
		<td>
			<?php echo $this->Html->link($this->Html->url(array('controller' => 'Site' , 'action' => 'form_ganador'),true).'/'.$perfil['Usuario']['ganador'] ,$this->Html->url(array('controller' => 'Site' , 'action' => 'form_ganador'),true).'/'.$perfil['Usuario']['ganador']); ?>
		</td>
	</tr>
</table>