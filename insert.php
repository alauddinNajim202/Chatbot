<?php
require_once 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<style>
	body{
		background-color: powderblue;
	}
</style>

<br>
<br>
<body>
<div class="container mt-5">
	<div class="row d-flex justify-content-center ">
		<div class="col-lg-4 bg-info p-5 rounded">
		<form action="" method="POST">
	
				<div id="main-wrapper">
					<center>				
						<div class="imgcontainer">
						<img src="image/bot_avatar.png" class="avatar"/>
					</center>
				</div>
				<tr class="my-3">
					<td> <label for="">ID</label></td>
					<td><input type="text" class="form-control mb-3" value="" name="id" placeholder="Type Id here..."required></td>
					
				</tr>
		

				<tr>
					<td>Question</td>
					<td><input type="text" class="form-control mb-3"  value="" name="question" placeholder="Type your query here..."required></td>
					
				</tr>
				<tr>
					<td>Reply</td>
					<td><input type="text" class="form-control mb-3 "   value="" name="reply" placeholder="Type your response here..."required></td>
					
				</tr>
		
					</tr>
				<tr>
				<td  colspan="3" align="center"><input type="submit" class="btn btn-success" id="button" name="submit" value="Report as Invalid"/></td>
				</tr>


	    </form>
		</div>
	</div>
</div>


</body>
</html>


<?php
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$question=$_POST['question'];
	$reply=$_POST['reply'];

	try {
	$sql = "INSERT INTO chatbot_hints VALUES('$id','$question','$reply')";
	$stmt = $db->prepare($sql);
	if($stmt->execute()) {
		echo '<script type="text/javascript"> alert("Success!") </script>';	
	} else {
		echo '<script type="text/javascript"> alert("throw new PDOException($e->getMessage())") </script>';
	}
	$stmt->closeCursor();
	} catch (PDOException $e) {
		throw new PDOException($e->getMessage());
	}
}
?>

<!-- <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:7882/qna.php"> -->
	