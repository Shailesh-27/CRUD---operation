<?php 
   include 'server.php';

   $id = $_GET['id'];
   $q = "DELETE FROM user WHERE id = $id ";
   $con->query($q);

   header('Location: display.php');
?>