<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class UsuarioIngrediente extends AppModel {
    
    var $name = 'UsuarioIngrediente';
    public $useTable = 'usuarios_ingredientes';
    public $belongsTo = array(
        'Ingrediente' => array(
            'className' => 'Ingrediente',
            'foreignKey' => 'ingrediente_id'
        )
    );
    
    /*public $hasOne = array(
        'Historia' => array(
            'foreignKey' => 'usuario_id'
        )
    );
    public $hasMany = array(
        'Voto' => array(
            'foreignKey' => 'usuario_id'
        ),
        'VotacionInterna' => array(
            'foreignKey' => 'usuario_id'
        )
    );
    var $validate = array(
        'nombre' => array(
            'required' => array(
                'rule' => array('minLength', '1'),
                'message' => 'Por favor ingrese su nombre.',
                'last' => true
            )
        ),
        'email' => array(
            'email' => array(
                'rule' => array('email', true),
                'message' => 'Por favor ingrese un correo electrónico valido.',
                'last' => true
            ),
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'El correo electrónico ingresado ya esta en uso.',
                'last' => true
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('minLength', '6'),
                'message' => 'La contraseña debe ser mayor a 6 caracteres.',
                'last' => true
            )
        ),
    );*/
    function facebookIdExist($facebook_id){
        $usuario = $this->findByFacebookId($facebook_id);
        return $usuario;
        
    }
}
