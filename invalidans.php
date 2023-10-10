<?php
require_once 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style >
	input{
		font-size: 1vw;
	}

	
	
	body{		
  		background-size: 100% 100%;
		background-color: powderblue;

	}
</style>


</head>
<br><br><br><br><br><br>
<br>
<br>
<body>
<div class="container">
	<div class="row d-flex justify-content-center text-light">
		<div class="col-lg-6 bg-dark p-4 rounded">
		<form action="" method="POST">
			<table border="0"  align="center" cellspacing="50">
					<div >
						<center>
						
						<div class="imgcontainer">
						<img src="image/bot_avatar.png" class="avatar"/>
					</center>
				</div>
				
					<tr>
						<td class="ml-3">Invalid Response</td>
						<td><input type="text" value="" class="form-control ms-2 my-3" name="messages" placeholder="Type your query here..."required></td>
						
					</tr>
					
					</tr>
				<tr>
				<td  colspan="3" align="center"><input type="submit" class="btn btn-primary" id="button" name="submit" value="Report as Invalid"/></td>
				</tr>


			</table>
		</form>
		</div>
	</div>
</div>


</body>
</html>


<?php

if(isset($_POST['submit']))
{
	// $id = $_POST['id'];
	$messages = $_POST['messages'];

	try {
		$sql = "INSERT INTO invalid() VALUES(NULL, '$messages')";
		$stmt = $db->prepare($sql);
		if ( $stmt->execute() ) {
			echo '<script type="text/javascript"> alert("Success!") </script>';
		} else {
			echo '<script type="text/javascript"> alert("throw new PDOException($e->getMessage())") </script>';
		} 
		$stmt->closeCursor();

	} catch (PDOException $e) {
		throw new PDOException ($e->getMessage());
	}
}
?>
	