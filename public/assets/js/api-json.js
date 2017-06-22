var api_token;
$(document).ready(function() {
	$('#login_form').on('submit', function (e) {
		e.preventDefault();
		$.ajax({
		    type: 'post',
		    url: 'login',
		    data: $('#login_form').serialize(),
		    success: function (data,status,xhr) {
	    		document.cookie='api-token='+xhr.getResponseHeader('token');
	    		location.href = 'dashboard';
		    },
		    error: function(data,status,xhr){
		    	$('#status_login')[0].className = 'label label-danger center-block';
	    		$('#status_login')[0].innerHTML = data.responseJSON.message;
		    }
	  	});
	});

	$('#button_logout').on('click', function(e){
		e.preventDefault();
		$.ajax({
		    type: 'post',
		    url: 'logout',
		    success: function (data,status,xhr) {
	    		document.cookie='api-token=';
	    		location.href = '/';
		    }
		});
	});

	$('#register_email_form').on('submit', function(e){
		e.preventDefault();
		$.ajax({
		    type: 'post',
		    url: 'register',
		    data: $('#register_email_form').serialize(),
		    success: function (data,status,xhr) {
		    	if(data.success){
		    		document.cookie='api-token='+xhr.getResponseHeader('token');
	    			location.href = 'dashboard';
		    	}
		    	else{
		    		console.log('password not match');
		    	}
		    }
	  	});
	});
});
