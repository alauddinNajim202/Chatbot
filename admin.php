<?php
	session_start();
	require_once 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>


	<title>Login as Admin</title>
	<link rel="stylesheet" href="css/stylex.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>
	body 
	{
	
	background-size: 100% 100%;
	background-color: #51b056;
	text-align: center;
	}

	.myform{
		padding: 20px;
	}

	</style>



</head>

<br>
<br>
<br>
<br>
<br>
<br>


<!-- <body style="background-color:#bdc3c7"> -->
	
	<div class="d-flex justify-content-center" >
			
		<form class="bg-info p-5 rounded" action="adminpage.php" method="post">

			<div class="inner_container">
				<label><h4 id="adminp">Password :</h4></label><br>
				<input class="form-control" name="password" type="password" class="inputvalues"  placeholder="Type your password" required/><br>
			
				<a href="adminlogin.php"><input class="btn btn-primary my-3" type="button"  value="LogIn"/></a><br>
				<a href="index.php"><input type="button" class="btn btn-danger"   value="Back"/></a>	
			</div>

		</form>
		
	</div>
</body>
</html>