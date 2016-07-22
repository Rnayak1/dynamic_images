$(document).ready( function()
{
	var i= 0;
	var myFunction = function()
	{	
		$.ajax({
			type: "GET",
			url: "sliderget.php",
			success: function(data)
			{	//alert(data);
				
				var obj = jQuery.parseJSON(data);
				if((obj.stop) == 0)
				{
					$('#imgbanner').attr("src",obj[0]);
					myFunction();
				}
				else
				{
					var myf =  function()
					{
						var x = obj.count0;
						console.log(x);
						stoptime = new Date();
						time = stoptime.getHours()+":"+stoptime.getMinutes();
						console.log(time);
						console.log(obj.stop);
						if(obj.stop >= time)
						{
							console.log(obj[i]);
							$("#imgbanner").attr("src",obj[i]);
							if(i < obj.count0-1)
							{
								i++;
								console.log(i);
							}	
							else
								i = 0;

							var timer = setTimeout(myf,10000);

						}

						else
							myFunction();
					}


					myf();
				}


			

			} 
		});
	}
myFunction();
});