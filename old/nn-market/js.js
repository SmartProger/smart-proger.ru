function logIn() 
{
	VK.Auth.login(
	function(response) 
	{
  		if (response.session) 
  		{
			alert("Добро пожаловать, "+ response.session.user.first_name + "!");
			window.location = "https://nn-market.ru";
  		}
  		else
  		{
    		window.location = "https://nn-market.ru";
    		alert('Ошибка! Не удалось войти. Попробуйте ещё раз.');
  		}
	}, 270340);
};


function getStatus()
{
	VK.Auth.getLoginStatus (function(status) 
		{
			if (status.status == 'connected') 
			{
				var user_id = status.session.mid;
				VK.Api.call('users.get', {user_ids: user_id, fields: "photo_50",v:"5.131"}, 
				function(gottedUser) 
				{
  					if(gottedUser.response)
  					{
  						logInLi.innerHTML = 
				'<a href="https://nn-market.ru/lk" class="nav-link"> Личный кабинет <img src="'+gottedUser.response[0].photo_50+'" style="border-radius: 50%; max-width: 40px"></a>';

    					logOutLi.hidden = false;
    					logOutHref.hidden = false; 
  					}
				});	
			}
		});
};


function getStatusLk()
{
		VK.Auth.getLoginStatus (function(status) 
		{
			if (status.status == 'connected') 
			{
				console.log(status.session);
				//var user_id = status.session.mid;
				VK.Api.call('users.get', {user_ids: status.session.mid, fields: "photo_50",v:"5.131"}, 
				function(gottedUser) 
				{
  					if(gottedUser.response)
  					{
  						logInLi.innerHTML = 
				'<a href="https://nn-market.ru/lk" class="nav-link"> Личный кабинет <img src="'+gottedUser.response[0].photo_50+'" style="border-radius: 50%; max-width: 40px"></a>';

    					logOutLi.hidden = false;
    					logOutHref.hidden = false; 

    					userPhoto.src = gottedUser.response[0].photo_50;
    					userName.innerHTML = '<i class="fa fa-vk"></i> ' + gottedUser.response[0].first_name + ' ' + gottedUser.response[0].last_name;
    					userVkHref.href = 'https://vk.com/id' + gottedUser.response[0].id;
  					}
				});	
			}
			else
			{
				userName.innerHTML = '<i class="fa fa-sign-in"></i> Войти через ВК';
				userVkHref.href = "https://nn-market.ru/login";
			}
		});
};


function getXmlHttp() {
    var xmlhttp;
    try {
      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
      xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
};



logOutHref.onclick = function()
{
	VK.Auth.logout(function(r){});
};