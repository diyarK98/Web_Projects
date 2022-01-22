<?php 
	session_start();
	if (isset($_SESSION['username'])) {
			if (isset($_GET["id"])) {
				$_SESSION['id'] = $_GET['id'];
				header("location:home.php?id=".$_SESSION['id']);
				unset($_SESSION['id']);
			}else{
				header("location:home.php");
			}
		}
 ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<img src="ashti.png" class="img-fluid m-2" alt="Responsive image">
			<div class="card-body" style="margin-top:50px;">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" id="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" id="password">
					</div>
				</form>
				<button class="btn float-right login_btn" id="submit">Login</button>
			</div>
		</div>
	</div>
</div>
<script><?php 
		echo "
			$('#submit').on('click', function(){
				var username = $('#username').val();
				var password = $('#password').val();
				$.post('logincheak.php', {username:username, password:password}, function(responce) {
					if(responce == 'success'){
						";
					echo "window.location.reload();";
						
					echo "}else{
						alert(responce);
					}
			})
		})";

 ?></script>
</body>
</html>