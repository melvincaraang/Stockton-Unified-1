$(document).ready(function(){

	$("#signup").click(function(){
		var username=$("#username").val();
		var password=$("#password").val();
		var dataString="username="+username+"&password="+password+"&signup=";
		alert("SINGING UP");
		if($.trim(username).length>0 & $.trim(password).length>0)
		{
			$.post("signup.php",{
				type: "POST",
				url: url,
				data: dataString,
				crossDomain: true,
				cache: false,
				beforeSend: function(){ $("#signup").val('Connecting...');},
				success: function(data){
				if(data=="success")
				{
					alert("Thank you for Registering with us! you can login now");
				}
				else if(data="exist")
				{
					alert("Hey! You alreay has account! you can login with us");
				}
				else if(data="failed")
					{
					alert("Something Went wrong");
					}
				}
			});
		}return false;
	});
});