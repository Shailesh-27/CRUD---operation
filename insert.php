<?php 
  
   include 'server.php';

   if(isset($_POST['regi_user'])){
   	  $Name = $_POST['n1'];
   	  $Email = $_POST['em'];
   	  $Address = $_POST['ad'];
   	  $Mobile = $_POST['mob'];

   	  $s1 = "INSERT INTO user(name,email,address,mobile_no) VALUES ('$Name','$Email','$Address','$Mobile')";
   	  $con->query($s1);
   	  header('Location: display.php');
   }

?>