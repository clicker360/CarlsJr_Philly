/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$.facebook = function (appId , status, xfbml){    
    var _appId = appId;
    var _status = status;
    var _xfbml = xfbml;
    var m = {            
            init: function() { 
                 FB.init({
                    appId      : _appId,
                    status     : _status,
                    xfbml      : _xfbml
                  });
                FB.getLoginStatus(function(response) {
                    if (response.status === 'connected') {
                      //var uid = response.authResponse.userID;
                      //var accessToken = response.authResponse.accessToken;
                      $("#conecta").on('click',function(e){
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
            }, 
            connect: function(){ 
                $("#conecta").on('click',function(e){
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
                $.post('Site/saveDataAjax',data,function(save){
                    var user = JSON.parse(save);
                    if(user.success){
                        usuario = user.data.Usuario;
                        FB.api(
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
                                        window.location = 'Site/Perfil/'+usuario.facebook_id;
                                }
                            );
                    }else{
                        alert('Ocurrio un error.');
                    }
                });
            }
        };
    return m;
};
