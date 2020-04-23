<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
if($login)
{
    ?>
<?php
include 'co.php';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pragathi</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <li>
                        <a href="cdsindex.php"><font size="3" color="white">Home</font></a>
                      </li>
	</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <!--<img class="align-content" src="images/logo.png" alt="">-->
                    </a>
                </div>
                <div class="login-form">
                    <form name="registration" method="POST">
					<h1><center><font color=black>Add Exhibition</center></h1>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" onchange="return validateform1()" class="form-control" placeholder="" autocomplete=off required>
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
var x=document.forms["registration"]["name"].value;
if(x.length<2 || x.length>50)
{
alert("Please enter name with more than 2 letters and less than 30 letters");
document.getElementById("name").focus();
document.getElementById("name").value="";
return false;
}
return true;
			}
				  
				  </script>
						</div>
                        <div class="form-group">
                            <label>Place</label>
                            <input type="text"  class="form-control" id="place" name="place" onchange="return validateform2()" autocomplete=off placeholder="" required>
                             <script>
				  function validateform2()
				  {
var x=document.forms["registration"]["place"].value;
if(x=="")
{
alert("Please Fill place");
document.getElementById("place").focus();
return false;
}
var x=document.forms["registration"]["place"].value;
if(x.length<2 || x.length>50)
{
alert("Please enter place with more than 2 letters and less than 30 letters");
document.getElementById("place").focus();
document.getElementById("place").value="";
return false;
}
return true;
			}
				  </script>
						</div>
						<div class="form-group">
                            <label>Venue</label>
                            <input type="text"  class="form-control" id="venue" name="venue" onchange="return validateform3()" autocomplete=off placeholder="" required>
                             <script>
				  function validateform3()
				  {
var x=document.forms["registration"]["venue"].value;
if(x=="")
{
alert("Please Fill name");
document.getElementById("venue").focus();
return false;
}
var x=document.forms["registration"]["venue"].value;
if(x.length<2 || x.length>50)
{
alert("Please enter name with more than 2 letters and less than 30 letters");
document.getElementById("venue").focus();
document.getElementById("venue").value="";
return false;
}
return true;
			}
				  </script>
						</div>
                        <div class="form-group">
                            <label>From date</label>
                            <input type="date" name="fdate" id="fdate" onchange="return validateform4()" autocomplete=off class="form-control" placeholder="" required>
                             <script>
				function validateform4()
				{
var x=document.forms["registration"]["fdate"].value;
if(x=="")
{
alert("Please Fill Date of birth");
document.getElementById("fdate").focus();
return false;
}
var GivenDate =document.forms["registration"]["fdate"].value;
var CurrentDate = new Date();
GivenDate = new Date(GivenDate);

if(GivenDate < CurrentDate){
    alert('Given date is less than the current date.');
	document.getElementById("fdate").focus();
	document.getElementById("fdate").value="";
	return false;
}

var x =document.forms["registration"]["fdate"].value;
var y = "2025-01-01";
if(x > y){
    alert('Please enter year below 2025');
	document.getElementById("fdate").focus();
	document.getElementById("fdate").value="";
	return false;
}
return true;
				}				
				</script>
				
              </div>
			  
			  
                        <div class="form-group">
                            <label>To date</label>
                            <input type="date" name="tdate" id="tdate" onchange="return validateform5()" autocomplete=off class="form-control" placeholder="" required>
                             <script>
				function validateform5()
				{
var x=document.forms["registration"]["tdate"].value;
if(x=="")
{
alert("Please Fill To date");
 document.getElementById("tdate").focus();
return false;
}

var pwd=document.getElementById("fdate").value;
var cpwd=document.getElementById("tdate").value;
if(cpwd<=pwd){
	     alert("Enter date above From date");
		 document.getElementById("tdate").focus(); 
	     document.getElementById("tdate").value="";		 
		 return false;
}
var x =document.forms["registration"]["tdate"].value;
var d = "2025-01-01";
if(x > d){
    alert('Please enter year below 2025');
	document.getElementById("tdate").focus();
	document.getElementById("tdate").value="";
	return false;
}
return true;
				}
				</script>
              </div>
			 <div class="form-group">
                            <label>From Time</label>
                            <input type="time" name="ftime" id="ftime" onchange="return validateform6()" autocomplete=off class="form-control" placeholder="" required>
                             <script>
				function validateform6()
				{
var x=document.forms["registration"]["dob"].value;
if(x=="")
{
alert("Please Fill Date of birth");
document.getElementById("dob").focus();
return false;
}
var GivenDate =document.forms["registration"]["dob"].value;
var CurrentDate = new Date();
GivenDate = new Date(GivenDate);

if(GivenDate > CurrentDate){
    alert('Given date is greater than the current date.');
	document.getElementById("dob").focus();
	document.getElementById("dob").value="";
	return false;
}

var x =document.forms["registration"]["dob"].value;
var d = "1960-01-01";
if(x < d){
    alert('Please enter year above 1960');
	document.getElementById("dob").focus();
	document.getElementById("dob").value="";
	return false;
}
return true;
				}				
				</script>
              </div>
			 
			  <div class="form-group">
                            <label>To Time</label>
                            <input type="time" name="ttime" id="ttime" onchange="return validateform7()" autocomplete=off class="form-control" placeholder="" required>
                             <script>
				function validateform7()
				{
var x=document.forms["registration"]["dob"].value;
if(x=="")
{
alert("Please Fill Date of birth");
document.getElementById("dob").focus();
return false;
}
var GivenDate =document.forms["registration"]["dob"].value;
var CurrentDate = new Date();
GivenDate = new Date(GivenDate);

if(GivenDate > CurrentDate){
    alert('Given date is greater than the current date.');
	document.getElementById("dob").focus();
	document.getElementById("dob").value="";
	return false;
}

var x =document.forms["registration"]["dob"].value;
var d = "1960-01-01";
if(x < d){
    alert('Please enter year above 1960');
	document.getElementById("dob").focus();
	document.getElementById("dob").value="";
	return false;
}
return true;
				}				
				</script>
              </div>
			 <div class="form-group">
                            <label> Tickets for adults</label>
                            <input type="text" name="avail" id="avail" onchange="return validateform8()" autocomplete=off class="form-control" placeholder="" required>
							<script>
				  function validateform8()
				  {
					
var x=document.forms["registration"]["avail"].value;
if(x=="")
{
alert("Please Fill tickets for adults");
 document.getElementById("avail").focus();
return false;
}
else if(document.registration.avail.value.length>"4")
{
	alert("Provide available ticket below four numbers");
	document.getElementById("avail").focus();
	document.getElementById("avail").value="";
	return false;
}
var x=document.forms["registration"]["avail"].value;
if(isNaN(x))
{
	alert("Only numbers are allowed");
	document.getElementById("avail").focus();
	document.getElementById("avail").value="";
	return false;
}  
return true;
				  }
				  </script>
							</div>
<div class="form-group">
                            <label>Tickets for children</label>
                            <input type="text" name="cavail" id="cavail" onchange="return validateform11()" autocomplete=off class="form-control" placeholder="" required>
							<script>
				  function validateform11()
				  {
					
var x=document.forms["registration"]["cavail"].value;
if(x=="")
{
alert("Please Fill tickets for children");
 document.getElementById("cavail").focus();
return false;
}
else if(document.registration.cavail.value.length>"4")
{
	alert("Provide available ticket below four numbers");
	document.getElementById("cavail").focus();
	document.getElementById("cavail").value="";
	return false;
}
var x=document.forms["registration"]["cavail"].value;
if(isNaN(x))
{
	alert("Only numbers are allowed");
	document.getElementById("cavail").focus();
	document.getElementById("cavail").value="";
	return false;
}  
return true;
				  }
				  </script>
							</div>
							
							<div class="form-group">
                            <label>Ticket charge for adult</label>
                            <input type="text" name="tcharge" id="tcharge" onchange="return validateform9()" autocomplete=off class="form-control" placeholder="" required>
                            <script>
				  function validateform9()
				  {
					
var x=document.forms["registration"]["tcharge"].value;
if(x=="")
{
alert("Please Fill Ticket Charge");
 document.getElementById("tcharge").focus();
return false;
}
else if(document.registration.tcharge.value.length>"3")
{
	alert("Provide Ticket charge as 3 numbers");
	document.getElementById("tcharge").focus();
	document.getElementById("tcharge").value="";
	return false;
}
var x=document.forms["registration"]["tcharge"].value;
if(isNaN(x))
{
	alert("Only numbers are allowed");
	document.getElementById("tcharge").focus();
	document.getElementById("tcharge").value="";
	return false;
}  
return true;
				  }
				  </script>
							</div>
							<div class="form-group">
                            <label>Ticket charge for children</label>
                            <input type="text" name="childcharge" id="childcharge" onchange="return validateform10()" autocomplete=off class="form-control" placeholder="" required>
                            <script>
				  function validateform10()
				  {
					
var x=document.forms["registration"]["childcharge"].value;
if(x=="")
{
alert("Please Fill Ticket Charge for children");
 document.getElementById("childcharge").focus();
return false;
}
else if(document.registration.childcharge.value.length>"3")
{
	alert("Provide Ticket charge as 3 numbers");
	document.getElementById("childcharge").focus();
	document.getElementById("childcharge").value="";
	return false;
}
var x=document.forms["registration"]["childcharge"].value;
if(isNaN(x))
{
	alert("Only numbers are allowed");
	document.getElementById("childcharge").focus();
	document.getElementById("childcharge").value="";
	return false;
}  
return true;
				  }
				  </script>
							</div>
				 <button type="submit" name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Add</button>
                        </div>					                  
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
<?php 
include 'co.php'; 
if(isset($_POST['submit']))
{
  $a=$_POST['name'];
  $b=$_POST['place'];
  $c=$_POST['venue'];
  $d=$_POST['fdate'];
  $e=$_POST['tdate'];
  $f=$_POST['ftime'];
  $g=$_POST['ttime'];
  $h=$_POST['avail'];
  $k=$_POST['cavail'];
  $i=$_POST['tcharge'];
  $j=$_POST['childcharge'];
   //echo "<script>alert('$b');</script>";
   //$sql="select * from login where username='$h'";
//$result=mysqli_query($con,$sql);
//$rowcount=mysqli_num_rows($result);
//if($rowcount==0)

//$sq="insert into login(username,password,usertype,status)values('$h','$i',3,0)";
//if(mysqli_query($con,$sq))
//{
	//$s=mysqli_query($con,"select logid from login where username='$h'");
	//$r=mysqli_fetch_array($s,MYSQLI_ASSOC);
	//$lid=$r['logid'];
	//echo "<script>alert('$lid');</script>";
$sql="insert into exhibition(name,place,venue,fdate,tdate,ftime,ttime,tickets,ctickets,tcharge,ccharge)values('$a','$b','$c','$d','$e','$f','$g','$h','$k','$i','$j')";
 $ch=mysqli_query($con,$sql);
if($ch)
{?>
 <script>
 alert("Successfully added");
 window.location='addexhibition.php'</script>
	<?php
}
else
{
  echo"error:".$sql."<br>".mysqli_error($con);
}
}

mysqli_close($con);
?>
<?php
}
else
header("location:/MAINPROJECT/login.html");
?>