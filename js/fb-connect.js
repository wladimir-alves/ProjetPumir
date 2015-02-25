$(function() {
	
	var scopes = 'email, user_friends, user_online_presence';

	var btn_login = '<a href="#">Déjà un compte ?</a>';

	var div_session =  "<div id='facebook-session'>"+
						"<strong></strong>"+
						"<img>"+
						"<a href='#' id='logout' class='btn btn_danger'> Deconnexion</a>"+
						"</div>";

	window.fbAsyncInit = function() {

	 	FB.init({
		    appId      : '606224159512527',
		    status	   : true,
		    cookie     : true,
		    xfbml      : true,
		    version    : 'v2.1'
		});

	  
		FB.getLoginStatus(function(response) {
			statusChangeCallback(response);
	  	});
  	};
  	
  	var statusChangeCallback = function(response, callback) {
	    console.log('statusChangeCallback');
	    console.log(response);
	
	    if (response.status === 'connected') {	      
	    	getFacebookData();
	    } else {
	    	callback(false);
	    }
	}

	var checkLoginState = function(callback) {
	    FB.getLoginStatus(function(response) {
	      statusChangeCallback(response, function(data){
	      callback(data);	
	      }); 
	    });
	};

	var getFacebookData = function()
	{
		FB.api('/me', function(response){
			$('#login').after(div_session);
			$('#login').remove();
			$('#facebook-session strong').text("Bienvenue: "+response.name);
			
		});

	};

	var facebookLogin = function(){
		checkLoginState(function(response){
			if(!response) {
				console.log(response);	
				FB.login(function(response){
					if(response.status === 'connected')
						getFacebookData();

				}, {scope: scopes});
			}
		})
	};


	$(document).on('click','#login', function(e){
	 	e.preventDefault();

	 	facebookLogin();
	})

})