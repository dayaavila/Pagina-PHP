$(document).ready(function(){

	$("#btn_login").on("click", function(){

		//e.preventDefault();
		//var flag = true;
		msg = "";
		var name = $("#usuario");
        var pwd = $("#pwd");
        
		if(name.val() == "")
		{
			msg += "El campo usuario está vacío <br>";
			$(name).css("border-bottom", "2px solid red");
			//flag = false;
		}
		else
		{
			$(name).css("border-bottom", "2px solid gray");
		}

		if(pwd.val() == "")
		{
			msg += "El campo password está vacío <br>";
			$(pwd).css("border-bottom", "2px solid red");
			//flag = false;
		}
		else
		{
			$(pwd).css("border-bottom", "2px solid gray");
		}

		$("#errorsL").html(msg);
		if(msg == "")
		{
			document.getElementById("login_form").submit();
		}
	});
});
