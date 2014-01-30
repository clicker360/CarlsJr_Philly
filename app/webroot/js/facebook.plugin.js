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
                        window.location = 'Site/Perfil/'+user.data.Usuario.facebook_id
                    }else{
                        alert('Ocurrio un error.');
                    }
                });
            }
        };
    return m;
};
