<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class SiteController extends AppController {
    
    public $uses = array(
        'Usuario',
        'Ingrediente',
        'UsuarioIngrediente'
    );

    public function index() {
        $this->layout = 'philly';
        
    }
    public function saveDataAjax(){
        $this->autoRender = false;
        if($this->data 
        /*&& ($_SERVER['HTTP_REFERER'] == Router::url(array('controller' => 'Site' , 'action' => 'index'),true))*/
        && (isset($this->data['id']) && $this->data['id'])
        && (isset($this->data['name']) && $this->data['name'])
        && (isset($this->data['link']) && $this->data['link'])
        && (isset($this->data['email']) && $this->data['email'])
        && (isset($this->data['username']) && $this->data['username'])
        ){
            $user['facebook_id'] = $this->data['id'];
            $user['name'] = $this->data['name'];
            $user['url'] = $this->data['link'];
            $user['email'] = $this->data['email'];
            $user['username'] = $this->data['username'];
            
            $facebookIdExist = $this->Usuario->facebookIdExist($user['facebook_id']);
            
            $result = array();
            
            if($facebookIdExist){
                $result['success'] = true;
                $result['code'] = 2;
                $result['data'] = $facebookIdExist;
            }else{
                $saveUser = $this->Usuario->save($user);
                if($saveUser){
                    $result['success'] = true;
                    $result['code'] = 1;
                    $result['data'] = $saveUser;
                }else{
                    $result['success'] = false;
                    $result['code'] = 1;
                }
            }
            echo json_encode($result);
            
        }        
        exit();
    }
    public function perfil($facebook_id){        
        require WWW_ROOT . 'facebook/src/facebook.php';
        //$facebook = new Facebook(array('appId' => Configure::read('Facebook.appId'), 'secret' => Configure::read('Facebook.secretKey'),));
        $this->layout = 'philly';
        $usuario = $this->Usuario->find('first',array('conditions' => array('Usuario.facebook_id' => $facebook_id)));
        if(!$usuario){
            $this->redirect(Router::url(array('controller' => 'Site' , 'action' => 'index'),true));
            exit();
        }
        
        $ingredientes = $this->Ingrediente->find('all');
        $ingredientes = Hash::combine($ingredientes, '{n}.Ingrediente.id', '{n}');
        $usuario['UsuarioIngrediente'] = Hash::combine($usuario['UsuarioIngrediente'], '{n}.ingrediente_id', '{n}');
        $this->set(compact('usuario','ingredientes'));
    }
    public function saveIngredientAjax(){
        Configure::write('debug','0');
        $this->autoRender = false;
        $referer = split('/', $this->referer());
        $result = array();
        
        if($this->data
        && ( $referer && is_array($referer))
        && ($referer[count($referer) -1] == $this->data['perfilId'])
        && (isset($this->data['usuarioId']) && $this->data['usuarioId'])        
        && (isset($this->data['perfilId']) && $this->data['perfilId'])        
        && (isset($this->data['ingredienteId']) && $this->data['ingredienteId'])        
        ){
            $usuarioIngrediente['usuario_regalo_facebook_id'] = $this->data['usuarioId'];
            $usuarioIngrediente['usuario_facebook_id'] = $this->data['perfilId'];
            $usuarioIngrediente['ingrediente_id'] = $this->data['ingredienteId'];
            if($usuarioIngrediente['usuario_regalo_facebook_id'] != $usuarioIngrediente['usuario_facebook_id']){
                $existeUsuario = $this->Usuario->findByFacebookId($usuarioIngrediente['usuario_regalo_facebook_id']);
                $existePerfil = $this->Usuario->findByFacebookId($usuarioIngrediente['usuario_facebook_id']);
                $existeIngrediente = $this->Ingrediente->findById($usuarioIngrediente['ingrediente_id']);
                if($existeUsuario && $existePerfil && $existeIngrediente ){
                    try {
                        $save = $this->UsuarioIngrediente->save($usuarioIngrediente);
                    } catch(Exception $e) {
                        $result = false;
                        $code = $e->getCode();
                    }
                    //$save = $this->UsuarioIngrediente->save($usuarioIngrediente);
                    if($save){
                        $result['success'] = true;
                        $result['code'] = 1;
                        $result['data'] = $save;
                    }else{
                        $result['success'] = false;
                        $result['code'] = $code;
                        $result['message'] = 'Ya regalaste un ingrediente a este usuario.';
                    }
                }
            }else{
                $result['success'] = false;
                $result['code'] = 3;
                $result['message'] = 'No puedes regalarte ingredientes a ti mismo.';
            }
            
        }else{
            $result['success'] = false;
            $result['code'] = 1;
            $result['message'] = 'Ocurrio un error.';
        }
        echo json_encode($result);
        exit();
    }

}