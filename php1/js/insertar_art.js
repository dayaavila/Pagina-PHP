$(document).ready(function(e){

		$("#insertar_art").on("submit", function(){ 
		
		var flag = true;
		msg = "";
		var name = $("#name_art");
		var text = $("#textArea");
		var img = $("#user-img-file");

		if(name.val() == "")
		{
			msg += "El campo Nombre del Artículo está vacío <br>";
			$(name).css("border-bottom", "2px solid red");
			flag = false;
		}
		else
		{
			$(name).css("border-bottom", "2px solid gray");
        }
        
		if(text.val() == "")
		{
			msg += "El Textarea está vacío <br>";
			$(text).css("border-bottom", "2px solid red");
			flag = false;
		}
		else
		{
			$(text).css("border-bottom", "2px solid gray");
		}

		if(img.val() == "")
		{
			msg += "El campo imagen está vacío <br>";
			$(img).css("border-bottom", "2px solid red");
			flag = false;
			return false;
		}
		else
		{
			$(img).css("border-bottom", "2px solid gray");
		}
	
		$("#errorsJs").html(msg);	
		if(flag)
		{
			$("#insertar_art").submit();
		}
	});
});