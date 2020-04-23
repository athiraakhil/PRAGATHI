<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
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
<li class="dropdown">
                        <a href=""><font size="3" color="white">Profile</font></a>
                        <ul class="dropdowncontent">
                          <li><a href="adschangepswd.php"><font size="1" color="white">Change Password</font></a></li>
                          <!--<li><a href="userreg.php">User</a></li>-->                                                   
                        </ul>
                      </li>
<a href="adsindex.php" color=blue>Home</a>
</div>
	<div class="page-content">
		<div class="form-v5-content">
			<form name="change" class="form-detail" action="#" method="POST">
				<h2>Change Password</h2>
				<div class="form-row">
					<label for="full-name">Username</label>
					<input type="text" name="uname" id="uname" class="input-text" placeholder="" autocomplete="off" required>
					<!--<i class="fas fa-user"></i>-->
				</div>
				<div class="form-row">
					<label for="your-address">Current Password</label>
					<input type="textarea" name="old" id="old" class="input-text" placeholder="" autocomplete="off" required <!--pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"-->
					<!--<i class="fas fa-envelope"></i>-->
				</div>
				<div class="form-row">
					<label for="password">New Password</label>
					<input type="text" name="new" id="new" class="input-text" placeholder="" autocomplete="off" required>
					<!--<i class="fas fa-lock"></i>-->
		           <script>
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
				  </script>
				</div>
				<div class="form-row">
					<label for="full-name">Confirm Password</label>
					<input type="text" name="conf" id="conf" OnChange="return validateform4()" class="input-text" placeholder="" autocomplete="off" required>
					<!--<i class="fas fa-user"></i>-->
					<script>
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
				</div>
				<div class="form-row-last">
					<input type="submit" name="submit" class="register" value="Submit">
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php 
include 'co.php'; 
if(isset($_POST['submit']))
{
$uname= $_POST["uname"];
$old=$_POST["old"];
$new=$_POST["new"];
$conf=$_POST["conf"];
$re=mysqli_query($con,"select * from login where username='$uname' and password='$old'");

if(mysqli_num_rows($re)>0)
{
    
    if ($new==$conf)
    { 
    mysqli_query($con,"update login set password='$new' where username='$uname'");
    ?>
        <script>
        alert("successfully updated")
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
        alert("Password MisMatch")
        </script>
    
<?php
    }
}
else
{
    
    ?>
    
    <script>
    alert("Password Does not existsss")
    </script>    
    <?php }
}?>
<?php
}
else
header("location:/MAINPROJECT/login.html");
?>
