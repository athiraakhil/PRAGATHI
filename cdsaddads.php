<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
if($login)
{
    ?>
<?php
include 'co.php';
$q="select * from grp";
$sql=mysqli_query($con,$q);
$q1="select * from ward";
$sql1=mysqli_query($con,$q1);
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

<a href="cdsindex.php" color=blue>Home</a>
</div>
	<div class="page-content">
		<div class="form-v5-content">
			<form name="registration" class="form-detail" action="#" method="POST">
				<h2>Ads Details</h2>
				<div class="form-row">
					<label for="full-name">Full Name</label>
					<input type="text" name="name" id="name" OnChange="return validateform1()" class="input-text" placeholder="" autocomplete="off" required>
					<!--<i class="fas fa-user"></i>-->
					<script>
                          function validateform1()
{
var x=document.forms["registration"]["name"].value;
if(x=="")
{
alert("Please Fill name");
document.getElementById("name").focus();
return false;
}
var x=new RegExp("^[a-zA-z ]*$");
if(!x.test(document.registration.name.value))
{
	alert("Enter name with characters only");
	registration.name.focus();
	document.getElementById("name").value=""
	return false;
}
var x=document.forms["registration"]["name"].value;
if(x.length<2 || x.length>30)
{
alert("Please enter name with more than 2 letters and less than 30 letters");
document.getElementById("name").focus();
document.getElementById("name").value=""
return false;
}
return true;
}
				</script>
				</div>
				<div class="form-row">
					<label for="your-address">Address</label>
					<input type="textarea" name="address" id="address" OnChange="return validateform2()" class="input-text" placeholder="" autocomplete="off" required <!--pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"-->
					<!--<i class="fas fa-envelope"></i>-->
					<script>
				 function validateform2()
				 {
				 var x=document.forms["registration"]["address"].value;
if(x=="")
{
alert("Please Fill address");
document.getElementById("address").focus();
document.getElementById("address").value=""
return false;
}
return true;
}
				 </script>
				</div>
				<div class="form-row">
					<label for="full-name">Date of birth </label>
					<input type="date" name="dob" id="dob" OnChange="return validateform3()" class="input-text" placeholder="" autocomplete="off" required>
				   <script>
				function validateform3()
				{
var x=document.forms["registration"]["dob"].value;
if(x=="")
{
alert("Please Fill Date of birth");
document.getElementById("dob").focus();
return false;
}
/*var GivenDate =document.forms["registration"]["dob"].value;
var CurrentDate = new Date();
GivenDate = new Date(GivenDate);

if(GivenDate > CurrentDate){
    alert('Given date is greater than the current date.');
	document.getElementById("dob").focus();
	document.getElementById("dob").value="";
	return false;
}*/

var x =document.forms["registration"]["dob"].value;
var d = "1960-01-01";
if(x < d){
    alert('Please enter year above 1960');
	document.getElementById("dob").focus();
	document.getElementById("dob").value="";
	return false;
}
var y =document.forms["registration"]["dob"].value;
var s = "2000-01-01";
if(y > s){
    alert('Please enter year below 2000');
	document.getElementById("dob").focus();
	document.getElementById("dob").value="";
	return false;
}
return true;
				}				
				</script>
				 </div> 
				
				<div class="form-row">
					<label for="full-name">Adhar Number</label>
					<input type="text" name="anumber" id="ano" OnChange="return validateform4()" class="input-text" placeholder="" autocomplete="off" required>
				 <script>
				  function validateform4()
				  {
					
var x=document.forms["registration"]["ano"].value;
if(x=="")
{
alert("Please Fill Adhar number");
 document.getElementById("ano").focus();
return false;
}
else if(document.registration.ano.value.length!="12")
{
	alert("Provide Adher number as 12 numbers");
	document.getElementById("ano").focus();
	document.getElementById("ano").value="";
	return false;
}
var x=document.forms["registration"]["ano"].value;
if(isNaN(x))
{
	alert("Only numbers are allowed");
	document.getElementById("ano").focus();
	document.getElementById("ano").value="";
	return false;
}  
return true;
				  }
				  </script>
				 </div>   
                <div class="form-row">
					<label for="full-name">Ward Number</label>
					<select name="wnumber" id="wno" onChange="return validateform5()" style="width: 580px; height: 2.8em; border: none">
								<option value="">---- SELECT ----</option>
								<?php
								while($fetch=mysqli_fetch_array($sql1))
								{
									?>
									<option value="<?php echo $fetch
									['wardid']?>"><?php echo $fetch['wardname']?> <?php
								}
								?>
							</select>
							<script>
							function validateform5()
							{
							if( document.registration.wno.value== "" )
         {
            alert( "Please provide your Ward number" );
			document.getElementById("wno").focus();
	        document.getElementById("wno").value="";
            return false;
         }
            return true;		 
							}
							</script>
				 </div> 
                <div class="form-row">
					<label for="full-name">Group Name</label>
					<select  name="gname" id="gname"  onChange="return validateform6()" style="width: 580px; height: 2.8em; border: none"" placeholder="" required>
								<option value="">---- SELECT ----</option>
								<?php
								while($fetch=mysqli_fetch_array($sql))
								{
									?>
									<option value="<?php echo $fetch
									['gid']?>"><?php echo $fetch['gname']?> <?php
								}
								?>
							</select>
							<script>
							function validateform6()
							{
var x=document.forms["registration"]["gname"].value;
if(x=="")
{
	alert("Please fill Group name");
	document.getElementById("gname").focus();
	document.getElementById("gname").value="";
	return false;
}
return true;
							}
							</script>
				 </div> 
                				 
				<div class="form-row">
					<label for="password">Contact Number</label>
					<input type="text" name="cno" id="cno" OnChange="return validateform7()" class="input-text" placeholder="" autocomplete="off" required>
					<!--<i class="fas fa-lock"></i>-->
					<script>
				function validateform7()
				{
					var digits = "0123456789";
var phoneNumberDelimiters = "()- ";
var validWorldPhoneChars = phoneNumberDelimiters + "+";
var minDigitsInIPhoneNumber = 10;

function isInteger(s)
{   var i;
    for (i = 0; i < s.length; i++)
    {   
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    
    return true;
}
function trim(s)
{   var i;
    var returnString = "";
    
    for (i = 0; i < s.length; i++)
    {   
        
        var c = s.charAt(i);
        if (c != " ") returnString += c;
    }
    return returnString;
}
function stripCharsInBag(s, bag)
{   var i;
    var returnString = "";
    
    for (i = 0; i < s.length; i++)
    {   
        
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function checkInternationalPhone(strPhone){
var bracket=3
strPhone=trim(strPhone)
if(strPhone.indexOf("+")>1) return false
if(strPhone.indexOf("-")!=-1)bracket=bracket+1
if(strPhone.indexOf("(")!=-1 && strPhone.indexOf("(")>bracket)return false
var brchr=strPhone.indexOf("(")
if(strPhone.indexOf("(")!=-1 && strPhone.charAt(brchr+2)!=")")return false
if(strPhone.indexOf("(")==-1 && strPhone.indexOf(")")!=-1)return false
s=stripCharsInBag(strPhone,validWorldPhoneChars);
return (isInteger(s) && s.length >= minDigitsInIPhoneNumber);
}

	var Phone=document.registration.cno
	
	if ((Phone.value==null)||(Phone.value=="")){
		alert("Please Enter your Phone Number")
		Phone.focus()
		return false
	}
	if (checkInternationalPhone(Phone.value)==false){
		alert("Please Enter a Valid Phone Number")
		Phone.value=""
		Phone.focus()
		return false
	}
	var x=new RegExp("^([6-9]{1})([0-9]{9})$");
if(!x.test(document.registration.cno.value))
{
	alert("Phone number is invalid.Phone number must begin with 9,8,7 or 6");
	registration.cno.focus();
	document.getElementById("cno").value=""
	return false;
}
return true;
				}
				</script>
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="pass" id="pass" OnChange="return validateform8()" class="input-text" placeholder="" autocomplete="off" required>
					<!--<i class="fas fa-lock"></i>-->
					<script>
				function validateform8()
				{
					var x=document.forms["registration"]["pass"].value;
if(x=="")
{
alert("Please Fill  password");
 document.getElementById("pass").focus();
return false;
}
else if(document.registration.pass.value.length<8)
{
	alert("Password should be minimum 8 characters long");
	document.getElementById("pass").focus();
	return false;
}
var passw=  /^[A-Za-z]\w{7,14}$/;
if(document.registration.pass.value.match(passw))
{
	
}	
else
{ 
alert('Password must contain numbers,characters,underscore and first letter as character');
document.getElementById("pass").focus();
return false;
}
return true;
				}
				</script>
				</div>
				<div class="form-row">
					<label for="password">Confirm Password</label>
					<input type="password" name="cpassword" id="cpass" OnChange="return validateform10()" class="input-text" placeholder="" autocomplete="off" required>
					<!--<i class="fas fa-lock"></i>-->
					<script>
				function validateform10()
				{
					var x=document.forms["registration"]["cpass"].value;
if(x=="")
{
alert("Please Fill confirm password");
 document.getElementById("cpass").focus();
return false;
}

var pwd=document.getElementById("pass").value;
var cpwd=document.getElementById("cpass").value;
if(pwd!=cpwd){
	     alert("Password not matching");
		 document.getElementById("cpass").focus(); 
	     document.getElementById("cpass").value="";		 
		 return false;
}
return true;
				}
				</script>
				</div>
				<div class="form-row-last">
					<input type="submit" name="submit" class="register" value="Register">
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
  $a=$_POST['name'];
  $b=$_POST['address'];
  $c=$_POST['dob'];
  $d=$_POST['anumber'];
  $e=$_POST['gname'];
  $f=$_POST['wnumber'];
  $g=$_POST['cno'];
  //$h=$_POST['uname'];
  $i=$_POST['pass'];
   //echo "<script>alert('$b');</script>";
   $sql="select * from login where username='$g'";
$result=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
if($rowcount==0)

$sq="insert into login(username,password,usertype,status)values('$g','$i',3,0)";
if(mysqli_query($con,$sq))
{
	$s=mysqli_query($con,"select logid from login where username='$g'");
	$r=mysqli_fetch_array($s,MYSQLI_ASSOC);
	$lid=$r['logid'];
	//echo "<script>alert('$lid');</script>";
$sql="insert into reg(logid,name,address,dob,ano,gid,wardid,cno)values('$lid','$a','$b','$c','$d','$e','$f','$g')";
 $ch=mysqli_query($con,$sql);
if($ch)
{?>
 <script>
 alert("Successfully added");
 window.location='cdsaddads.php'</script>
	<?php
}
else
{
  echo"error:".$sql."<br>".mysqli_error($con);
}
}

else
{?>
	<script>
 alert("User Already Exists");
</script>";
<?php
}
}
mysqli_close($con);
?>
<?php
}
else
header("location:/MAINPROJECT/login.html");
?>
