<?php 
session_start();
	if (!isset($_SESSION['username'])) {
		if (isset($_GET['id'])) {
			header("location:index.php?id=".$_GET['id']);
			unset($_SESSION['id']);
		}else{
			header("location:index.php");
		}
	}
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<style type="text/css">
		html, body {
			background-attachment: fixed !important;
			background-size: %100; !important	;
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Home</title>
</head>
<body>
<nav class="navbar navbar-inverse" style="background: rgb(24, 30, 54);">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="color:gold" href="#">Ashti System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li id="homeli"><a href="#" id="home">Home</a></li>
        <li id="inqli"><a href="#" id="inq">In queue</span></a></li>
        <li id="finishli"><a href="#" id="finish">Finished</a></li>
        <li id="profileli"><a href="#" id="profile">Profile</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" id="uns"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container text-center" style="">
	<div class="row d-flex justify-content-center">
		<div class="card" style="width:100%;background-color: transparent !important;height: auto !important		;">
	    	<img class="card-img-top" src="default.jpg" alt="Card image" style="width:115px;margin-top: 25px;border-radius: 50%;">
	    	<div class="card-body">
		      	<h4 class="card-title" style="color: white;">Diyar Kamal</h4>
		      	<h4 class="card-title" style="color: white;">IT</h4>
	    	</div>
		</div>
	</div>
	<hr>	

</div>


<script type="text/javascript" src="scripts.js"></script>
</body>
</html>