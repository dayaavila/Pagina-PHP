$(document).ready(function(){

	$("#contact_form").on("submit", function(e){

		e.preventDefault();
		var flag = true;
		msg = "";
		var name = $("#name");
		var user = $("#user");
		var pwd = $("#pwd");
		var pws_repeat = $("#pws_repeat");
		var email = $("#email");

		if(name.val() == "")
		{
			msg += "El campo nombre está vacío <br>";
			$(name).css("border-bottom", "2px solid red");
			flag = false;
		}
		else
		{
			$(name).css("border-bottom", "2px solid gray");
		}

		
		if(user.val() == "")
		{
			msg += "El campo usuario está vacío <br>";
			$(user).css("border-bottom", "2px solid red");
			flag = false;
		}
		else
		{
			$(user).css("border-bottom", "2px solid gray");
		}

		if(pwd.val() == "")
		{
			msg += "El campo password está vacío <br>";
			$(pwd).css("border-bottom", "2px solid red");
			flag = false;
		}
		else
		{
			$(pwd).css("border-bottom", "2px solid gray");
		}

		if(pws_repeat.val() == "" || pws_repeat.val() !== pwd.val())
		{
			msg += "El campo Repita Password está vacío ó contraseñas no coinciden <br>";
			$(pws_repeat).css("border-bottom", "2px solid red");
			flag = false;
		}
		else
		{
			$(pws_repeat).css("border-bottom", "2px solid gray");
		}

		if(email.val() == "")
		{
			msg += "El campo E-mail está vacío <br>";
			$(email).css("border-bottom", "2px solid red");
			flag = false;
		}
		else
		{
			$(email).css("border-bottom", "2px solid gray");
		}

		$("#errors").html(msg);
		if(flag)
		{
			document.getElementById("contact_form").submit();
		}
	});
});
