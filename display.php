<?php 
       
      include 'server.php';

   	  $q = "SELECT * from user";

   	  $tar = $con->query($q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Display</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<style>
		body {
            font-size: 19px;
            font-family: "Poppins",sans-sarif;
        }
	</style>

</head>
<body>
	
	<div class="container">
		<br>
		<h1 class="text-warning text-center">DISPLAY TABLE ENTRY</h1><br>
		<table class="table table-striped table-hover table-bordered">
			<tr style="background: black;color: white;">
				<th style="text-align: center;">ID</th>
				<th style="text-align: center;">NAME</th>
				<th style="text-align: center;">EMAIL</th>
				<th style="text-align: center;">ADDRESS</th>
				<th style="text-align: center;">MOBILE-NO</th>
				<th style="text-align: center;">DELETE</th>
				<th style="text-align: center;">UPDATE</th>
			</tr>
            <?php
               
               include 'server.php';

               $q = "SELECT * from user";

               $tar = $con->query($q); 

               while($res = mysqli_fetch_array($tar)){

              ?>     
		            <tr style="text-align: center;">
						<td><?php echo $res['id']; ?></td>
						<td><?php echo $res['name']; ?></td>
						<td><?php echo $res['email']; ?></td>
						<td><?php echo $res['address']; ?></td>
						<td><?php echo $res['mobile_no']; ?></td>
						<td><button class="btn-danger btn "><a href="delete.php?id=<?php echo $res['id']; ?>" style="color: white;">DELETE</a></button></td>
						<td><button class="btn-primary btn "><a href="update.php?id=<?php echo $res['id']; ?>" style="color: white;">UPDATE</a></button></td>
					</tr>
			<?php
			   
			   }		

            ?>

			
		</table>
	</div> 
</body>
</html>