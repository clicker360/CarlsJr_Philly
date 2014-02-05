/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$.facebook = function (appId , status, xfbml){    
    var _appId = appId;
    var _status = status;
    var _xfbml = xfbml;
    var self = this;
    var m = {            
            init: function() {
                self.perfilId = $("#perfilId").val();
                 FB.init({
                    appId      : _appId,
                    status     : _status,
                    xfbml      : _xfbml
                  });
                FB.getLoginStatus(function(response) {
                    if (response.status === 'connected') {
                      //var uid = response.authResponse.userID;
                      //var accessToken = response.authResponse.accessToken;
                      $(".regalar").on('click',function(e){                            
                            self.ingredienteId = $(this).attr('id').replace('ingrediente_','');
                            e.preventDefault();
                            FB.api('/me', function(response) {
                                m.saveData(response);                                
                            });
                      });
                    } else if (response.status === 'not_authorized') {                        
                        m.connect();                           
                    } else {
                      // the user isn't logged in to Facebook.
                    }
                });
                m.getUser();
            }, 
            connect: function(){ 
                $(".regalar").on('click',function(e){
                    e.preventDefault();
                    FB.login(function(response) {
                        if (response.authResponse) {
                            FB.api('/me', function(response) {
                                m.saveData(response);
                                
                            });
                        } else {
                            //console.log('User cancelled login or did not fully authorize.');
                        }
                    },
                    {
                        scope: 'read_stream,publish_stream,status_update,email,user_about_me,user_online_presence,publish_actions,publish_actions,user_likes'
                    });
                });
               
            },
            saveData : function(data){ 
                $.post('/philly/Site/saveDataAjax',data,function(save){    
                    var user = JSON.parse(save);
                    if(user.success){
                        self.usuarioId = user.data.Usuario.facebook_id;
                        m.saveIngrediente();
                        
                        //window.location = 'Site/Perfil/'+user.data.Usuario.facebook_id
                    }else{
                        alert('Ocurrio un error.');
                    }
                });
            },
            saveIngrediente : function(){      
                $.post(
                        '/philly/Site/saveIngredientAjax',
                        { 
                            usuarioId : self.usuarioId,
                            perfilId : self.perfilId,
                            ingredienteId : self.ingredienteId
                        }
                        ,function(save){    
                            var saveI = JSON.parse(save);
                            if(saveI.success){
                                //usuario = user.data.Usuario;
                                //console.log(saveI);
                                /*FB.api(
                                        '/me/feed', 
                                        'POST', 
                                        {
                                            method: 'stream.publish',
                                            message: 'Ayúdame a ganarme una hamburguesa',
                                            picture : 'http://localhost/philly/images/Philly-Version3-1-assets/Philly_Cheese_Steak.png',
                                            link : 'http://localhost/philly/Site/Perfil/'+usuario.facebook_id,
                                            name: 'Ayúdame a ganarme una hamburguesa',
                                            caption: 'Ayúdame a ganarme una hamburguesa',
                                            description: 'Ayúdame a ganarme una hamburguesa',
                                            actions : {
                                                name : 'Test',                                    
                                                link : 'http://localhost/philly/Site/Perfil/'+usuario.facebook_id
                                            }
                                        }, 
                                        function(response) {
                                            if(response)
                                                window.location = 'http://localhost/philly/Site/Perfil/'+usuario.facebook_id;
                                        }
                                    );*/
                               location.reload();                                
                            }else{
                                alert(saveI.message);
                            }
                        }
                    );
            },
            getUser : function(){
                var regalos = $(".teregalo");
                $.each(regalos,function(index, value){
                    var idC = value.id
                    var idF = idC.replace('regalo-','');
                    $.get('http://graph.facebook.com/'+idF,function(graph){
                        console.log(graph.name);
                        $("#"+idC).children('strong').children('span').append(graph.name);
                    });
                });
                 
            }
        };
    return m;
};
