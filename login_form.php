<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<title>login form</title>
</head>
<body>
	
	<div id="show"></div>
	<script>
		$(document).ready(function(){
			$('#check').click(function(){
				var email = $('#email').val();
				var pass = $('#password').val();
				//alert(email + pass);
				$.post('check.php',{e:email,p:pass},function(data){
					$('#show').html(data);
				});
			});
		});
	</script>

	<form action="">
		<h1>Login | From::</h1>
		<table>
			<tr>
				<td>Email</td>
				<td><input type="text" id="email" name="" placeholder="Enter your Email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" id="password" name="" placeholder="Enter your Password"></td>
			</tr>
		</table>
		<button type="button" id="check">Login</button>
	</form>
	
</body>
</html>