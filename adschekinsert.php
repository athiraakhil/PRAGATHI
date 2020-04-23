<?php
session_start();
$login=$_SESSION['login'];
//$type=$_SESSION['type'];
$log=$_SESSION['loginid'];

if($login)
{
    ?>
<?php 
include 'co.php'; 

if(isset($_POST['submit']))
{
  $a=$_POST['name'];
  $b=$_POST['address'];
  $c=$_POST['district'];
  $d=$_POST['street'];
  $e=$_POST['pin'];
  $f=$_POST['mob'];
  
 
$sql2="insert into checkout(logid,cname,caddress,cdistrict,cstreet,cpin,cmob)values('$log','$a','$b','$c','$d','$e','$f')";
 $ch=mysqli_query($con,$sql2);
 
 
if($ch)
{?>
 <script>
 alert("Successfully added");
 window.location='payment/adsindex.php'</script>
	<?php
}

else
{
  echo"error:".$sql2."<br>".mysqli_error($con);
}
}

mysqli_close($con);

?>
<?php
}
else
//header("location:/MAINPROJECT/login.html");
?>



