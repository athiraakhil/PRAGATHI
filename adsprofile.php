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

<a href="memberindex.php" color=blue>Home</a>
</div>
	<div class="page-content">
		<div class="form-v5-content">
			<form name="change" class="form-detail" action="adseditprofile.php" method="POST">
				<h2>My Profile</h2>
				<?php
include 'co.php';

?>

<?php


$lid=$_SESSION['loginid'];

if($lid>0){
	

	
	$select="select * from reg join grp join ward on reg.gid=grp.gid && reg.wardid=ward.wardid where logid='$lid'";
	
	$data=mysqli_query($con,$select);
	$row=mysqli_fetch_array($data);
	?>
				<div class="form-row">
					<label for="full-name">Name</label>
					<input type="text" name="name" id="name" value="<?php echo $row['name'];?>" readonly class="input-text" placeholder="" autocomplete="off" readonly required>
					<!--<i class="fas fa-user"></i>-->
				</div>
				<div class="form-row">
					<label for="your-address">Address</label>
					<input type="textarea" name="address" id="address" value="<?php echo $row['address'];?>" class="input-text" placeholder="" autocomplete="off" readonly required <!--pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"-->
					<!--<i class="fas fa-envelope"></i>-->
				</div>
				<div class="form-row">
					<label for="your-address">Date of BIrth</label>
					<input type="textarea" name="dob" id="dob" value="<?php echo $row['dob'];?>" class="input-text" placeholder="" autocomplete="off" readonly required <!--pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"-->
					<!--<i class="fas fa-envelope"></i>-->
				</div>
				<div class="form-row">
					<label for="your-address">Adhar no</label>
					<input type="textarea" name="ano" id="ano" value="<?php echo $row['ano'];?>" class="input-text" placeholder="" autocomplete="off" readonly required <!--pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"-->
					<!--<i class="fas fa-envelope"></i>-->
				</div>
				<div class="form-row">
					<label for="your-address">Ward ID</label>
					<input type="textarea" name="wid" id="wid" value="<?php echo $row['wardname'];?>" class="input-text" placeholder="" autocomplete="off" readonly required <!--pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"-->
					<!--<i class="fas fa-envelope"></i>-->
				</div>
				<div class="form-row">
					<label for="your-address">Group Name</label>
					<input type="textarea" name="gname" id="gname" value="<?php echo $row['gname'];?>" class="input-text" placeholder="" autocomplete="off" readonly required <!--pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"-->
					<!--<i class="fas fa-envelope"></i>-->
				</div>
				<div class="form-row">
					<label for="name">Contact Number</label>
					<input type="text" name="cno" id="cno" class="input-text" value="<?php echo $row['cno'];?>" placeholder="" autocomplete="off" readonly required>
				</div>
				
				<div class="form-row-last">
					<input type="submit" name="sub" class="register" value="Edit">
					
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
 
<?php
}
}
else
header("location:login.html");
?>
