$(document).ready(function()
{ 
	$(".click").on("click", function(a)
	{
		var log = $(this).data('log');
		var avatar = $(this).data('avatar');
		var url="WelcomeSplash.php";

		var request = $.ajax
		({
			url: "ajax/login.php",
			type: "POST",
			data: 
			{ log : log, avatar : avatar }
			
		});

		request.done(function(){
			window.location = url;
		});

	
	a.preventDefault();
	});
});
