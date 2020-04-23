<?php
include 'co.php';
session_start();
$cid=$_GET['id'];
$sql = "DELETE FROM `cart` WHERE cartid='$cid'";
$r=mysqli_query($con,$sql);
if($r)

{
  
  ?>
   <script>

 alert("Item deleted");
 window.location="cdscart.php";

</script>
  <?php
}
mysqli_close($con);
?>
