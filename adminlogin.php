<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<title>Admin Portal</title>
	<link rel="stylesheet" href="navbar.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Open+Sans" rel="stylesheet">-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>
		body{
			background-color: #4682b4;
		}
		li a{
			text-decoration: none;
			font-size : 20px;
			color: aqua;
		}
	</style>
	
</head>
<header>
	
	<nav>
		<ul>
			
			<li><a href="adminlogin.php">Chats</a></li>
			<li><a href="qna.php">Dataset</a></li>
			<li><a href="invalid.php">Invalid</a></li>
			<li><a href="index.php">Sign Out</a></li>
		</ul>
	</nav>
</header>



<body>
	<table class="table bg-light table-striped text-center mt-5 rounded "  align="center" border="1px" style="width: 800px;line-height: 20px; ">
		<tr>
			<th class="text-center" colspan="4"><h2>Chat record</h2></th>
			<h3></h3>
		
		
		<tr>
			<th align="center">id</th>
			<th align="center">message</th>
			<th align="center">Added on</th>
			<th align="center">Type</th>
		</tr>
			<?php
			require_once 'dbconfig/config.php';
				try {
					$sql = "SELECT id,message,added_on,type FROM message";
					$stmt = $db->prepare($sql);
					$stmt->execute();
					if($stmt->rowCount() > 0){
						while ($row =$stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>".$row["id"]."</td><td>".$row["message"]." </td><td> ".$row["added_on"]." </td><td> ".$row['type']."</td></tr>";
					}
					echo "</table>";
				} else {
					echo "0 result";
				}
				$stmt->closeCursor();
				} catch (PDOException $e) {
					throw new PDOException($e->getMessage());
				}
			?>

	</table>

</body>
</html>