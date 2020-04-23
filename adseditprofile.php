<?php

session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
$name=$_SESSION['uname'];
if($login)
{
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pragathi</title>
	 <link rel="stylesheet" type="text/css" href="indexcss.css">
     <style>
        a{
  text-decoration: none;
  color:black;
}

        </style>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	
	
	<link rel="stylesheet" type="text/css1" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css1" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css1/style.css"/>
	
</head>
<body class="form-v5">
<!--<h1 class="mb-0"><a href="" class="text-black h2 mb-0"><strong>Pragathi<span class="text-danger">.</span></strong></a></h1>-->
</div>
<div class="navbar">

<a href="logout.php" color=blue>Logout</a>

<a href="adsindex.php" color=blue>Home</a>
</div>
	<div class="page-content">
		<div class="form-v5-content">
			<form name="change" class="form-detail" action="#" method="POST">
				<h2>My Profile</h2>
				<?php
include 'co.php';

?>

<?php


$lid=$_SESSION['loginid'];

if($lid>0){
	

	
	$select="select * from `reg` where logid='$lid'";
	
	$data=mysqli_query($con,$select);
	$row=mysqli_fetch_array($data);
	?>
				<div class="form-row">
					<label for="full-name">Name</label>
					<input type="text" name="name" id="name" value="<?php echo $row['name'];?>" readonly class="input-text" placeholder="" autocomplete="off" required>
					<!--<i class="fas fa-user"></i>-->
				</div>
				<div class="form-row">
					<label for="your-address">Address</label>
					<input type="textarea" name="address" id="address" value="<?php echo $row['address'];?>" class="input-text" placeholder="" autocomplete="off" required <!--pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"-->
					<!--<i class="fas fa-envelope"></i>-->
				</div>
				<div class="form-row">
					<label for="your-address">Date of Birth</label>
					<input type="textarea" name="dob" id="dob" value="<?php echo $row['dob'];?>" class="input-text" placeholder="" autocomplete="off" required <!--pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"-->
					<!--<i class="fas fa-envelope"></i>-->
				</div>
				<div class="form-row">
					<label for="name">Contact Number</label>
					<input type="text" name="cno" id="cno" class="input-text" value="<?php echo $row['cno'];?>" placeholder="" autocomplete="off" required>
					<!--<i class="fas fa-lock"></i>-->
		           <!--<script>
				  function validateform1()
				  {
					var x=document.forms["change"]["new"].value;
if(x=="")
{
alert("Please Fill  password");
 document.getElementById("new").focus();
return false;
}

var passw=  /^[A-Za-z]\w{7,14}$/;
if(document.change.new.value.match(passw))
{
	
}	
else
{ 
alert('Password must contain numbers,characters,underscore and first letter as character')
return false;
}  
return true;
				  }
				  </script>-->
				</div>
				<!--<div class="form-row">
					<label for="full-name">Confirm Password</label>
					<input type="text" name="conf" id="conf" OnChange="return validateform4()" class="input-text" placeholder="" autocomplete="off" required>
					<!--<i class="fas fa-user"></i>-->
					<!--<script>
				 function validateform4()
				 {
					 var x=document.forms["change"]["conf"].value;
if(x=="")
{
alert("Please Fill confirm password");
 document.getElementById("conf").focus();
return false;
}
var pwd=document.getElementById("new").value;
var cpwd=document.getElementById("conf").value;
if(pwd!=cpwd){
	     alert("Password not matching");
		 document.getElementById("conf").focus();         		 
		 return false;
}
return true;
				 }
				 </script>
				</div>-->
				<div class="form-row-last">
					<input type="submit" name="submit" class="register" value="Submit">
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php
include("co.php");


if(isset($_POST['submit']))
{
	
   //$name=$_POST["cust_name"];
$addr=$_POST["address"];
//$street=$_POST['cno];
//$city=$_POST['cust_city'];
//$pin=$_POST['cust_pin'];
//$dist=$_POST['cust_dist'];
$dob=$_POST["dob"];
$mob=$_POST["cno"];



	
$p2="update `reg`
set 

  `address` = '$addr',
  `dob` = '$dob',
  `cno` = '$mob'
where `logid` ='$lid'";
$ch=mysqli_query($con,$p2); 
	
if($ch)
{?>
	 <script>
 alert(" Updated");
   window.location="adseditprofile.php";
</script>
	<?php
}
else
{
  ?>
	 <script>
 alert(" Error");
   window.location="adseditprofile.php";
</script>
	<?php
   
}
}
}

?> 
<?php
}
else
header("location:login.html");
?>
