$(document).ready( function()
{

	$("#button").click(function()
	{
		var a = 1;
		if(($('#imagen').val().length) == 0)
		{
			//alert("choose images first");
			$('#msg1').css("display","inline");
			a = 0;
		}
		if(($('#imagen').val().length) != 0)
		{
			alert($('#imagen').val());
			$('#msg1').css("display","none");
			a = 1;
		}
		if(($('#start').val().length) == 0)
		{
			//alert("enter start time;");
			$("#msg2").css("display","inline");
			a = 0;
		}
		if(($('#start').val().length) != 0)
		{
			//alert("enter start time;");
			$("#msg2").css("display","none");
			a = 1;
		}		
		if(($('#stop').val().length) == 0)
		{
			//alert("enter stop time;");
			$("#msg3").css("display","inline");
			a = 0;
		}

		if(($('#stop').val().length) != 0)
		{
			//alert("enter stop time;");
			$("#msg3").css("display","none");
			a = 1;
		}

		if(a == 0)
		{
			$("#msg5").css("display","inline");
			return false;
		}

		else
			{
				$.ajax(
				  {
					type: "POST",
					url: "sliderconfig.php",
					//alert(datastring);
					success: function()
					{
					  alert("success");
					  //$("#msg2").css("display","block");
					},
					error: function() 
					{
					 alert("unsuccesful");
					}
				   });
			}
	});

});