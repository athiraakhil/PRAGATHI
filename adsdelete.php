<?php 
include 'co.php'; 
$id = $_GET['id'];
 
 if(isset($id))
  {
  
  // Check record exists
  $query = "DELETE FROM `reg` WHERE userid='$id'";
   $result = mysqli_query($con,$query);
   if($result)
   {
	   echo 'success';
	   echo "<script>window.location='cdsviewads.php'</script>";
   }
   else
   {
	  echo 'error';   
   }
   
  }
?>