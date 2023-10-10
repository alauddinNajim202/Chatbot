<?php
	require_once 'dbconfig/config.php';
		$rn=$_GET['rn'];
		$ques=$_GET['ques'];
		$rep=$_GET['rep'];
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

	table{
		color: white;
		border-radius: 10px;
	}
	
	body{
		
		background-color:powderblue;

	}
</style>


</head>
<br><br><br><br><br><br>
<body>
<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-lg-6 p-3 bg-info rounded">
		<form action="" method="POST">
		<table border="0" class="p-5 "  align="center" >
			<div >
				<center>
					
					<div class="imgcontainer my-2">
					<img src="image/bot_avatar.png" class="avatar"/>
				</center>
			</div>
	
			<tr>
				<td> <strong>ID</strong> </td>
				<td><input type="text" class="form-control mt-3 ms-2" value="<?php echo "$rn" ?>" name="id" required></td>

			</tr>
			<tr>
				<td> <strong>Question</strong> </td>
				<td><input type="text" class="form-control mt-2 ms-2 " value="<?php echo "$ques" ?>" name="question" required></td>
				
			</tr>
			
			<tr>
				<td> <strong>Reply</strong> </td>
				<td><input type="text" class="form-control my-3 ms-2 " value="<?php echo "$rep" ?>" name="reply" required></td>
				
			</tr>
			<tr>
			<td  colspan="2" align="center"><input class="mb-3 btn btn-warning" type="submit" id=button name="submit" value="Update Details"/></td>
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
		$id=$_POST['id'];
		$question=$_POST['question'];
		$reply=$_POST['reply'];

	$sql = "UPDATE CHATBOT_HINTS SET id='$id',question='$question',reply='$reply' WHERE id='$id' ";
	$stmt = $db->prepare($sql);
	if ( $stmt->execute() ) {
		echo "<script>alert('Record Updated')</script>";
		header("Location:http://localhost/Chatbot-main/qna.php/");
	}
	else{
		echo "Failed To Update Record";
	}
	}

	

?>
