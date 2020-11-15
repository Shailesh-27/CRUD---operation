<?php 

  include 'server.php';


   if(isset($_POST['regi_user'])){

   	  $id = $_GET['id'];
   	  $Name = $_POST['n1'];
   	  $Address = $_POST['ad'];
   	  $Mobile = $_POST['mob'];

   	  $u = "UPDATE user SET id = $id, name = '$Name', address = '$Address', mobile_no = '$Mobile' WHERE id = $id ";
   	  $con->query($u); 
   	  header('Location: display.php');
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<title>Update info</title>
</head>
<body> 
	
	<div class="container">
		<form method="post">
            <div class="header">
			    <h2>Update here</h2>
		    </div>
			<div class="input">
				<label for="name">Name : </label>
				<input type="text" name="n1" placeholder="Name here" required>
			</div>
			<div class="input">
				<label for="address">Address : </label>
				<input type="text" name="ad" placeholder="Address here" required>
			</div>
			<div class="input">
				<label for="mobile">Mobile No : </label>
				<input type="tel" name="mob" pattern="[789][0-9]{9}" placeholder="Ex:- 9824145365" required>
			</div>
			<div class="input">
				<button class="btn" type="submit" name="regi_user">UPDATE</button>
			</div>
			
		</form>
	</div>

</body> 
</html>

