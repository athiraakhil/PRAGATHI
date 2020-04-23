<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
if($login)
{
    ?>
<?php
include 'co.php';
$q="select * from productcategory";
$sql=mysqli_query($con,$q);
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

<a href="login.html" color=blue>Login</a>

<a href="adsindex.php" color=blue>Home</a>
</div>
	<div class="page-content">
		<div class="form-v5-content">
			<form name="registration" class="form-detail" action="#" method="POST" enctype="multipart/form-data">
				<h2>Product Details</h2>
				<div class="form-row">
					<label for="full-name">Product Name</label>
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
					<label for="full-name">Category</label>
					<select  name="cat" id="cat"  onChange="return validateform6()" style="width: 580px; height: 2.8em; border: none"" placeholder="" required>
								<option value="">---- SELECT ----</option>
								<?php
								while($fetch=mysqli_fetch_array($sql))
								{
									?>
									<option value="<?php echo $fetch
									['catid']?>"><?php echo $fetch['name']?> <?php
								}
								?>
							</select>
							
							<script>
							function validateform6()
							{
var x=document.forms["registration"]["cat"].value;
if(x=="")
{
	alert("Please fill product category");
	document.getElementById("cat").focus();
	document.getElementById("cat").value="";
	return false;
}
return true;
							}
							</script>
				 </div> 
                				 
				<div class="form-row">
					<label for="full-name"> Total Quantity(packets) </label>
					<input type="text" name="quant" id="quant" OnChange="return validateform3()" class="input-text" placeholder="" autocomplete="off" required>
				   <script>
				function validateform3()
				{
var x=document.forms["registration"]["quant"].value;
if(x=="")
{
alert("Please Fill total quantity");
document.getElementById("quant").focus();
return false;
}
var x=document.forms["registration"]["quant"].value;
if(isNaN(x))
{
	alert("Enter number of packets in digits");
	document.getElementById("quant").focus();
	document.getElementById("quant").value="";
	return false;
} 
return true;
				}				
				</script>
				 </div> 
				
				<div class="form-row">
					<label for="full-name">Weight</label>
					<select  name="weight" id="weight"  onChange="return validateform4()" style="width: 580px; height: 2.8em; border: none"" placeholder="" required>
								<option value="">---- SELECT ----</option>
	                            <option value="below 100gm">Below 100gm</option>
								<option value="100gm-500gm">100gm-500gm</option>
								<option value="500qm-lkg">500gm-lkg</option>
								<option value="1kg-3kg">1kg-3kg</option>
								<option value="3kg-5kg">3kg-5kg</option>
								<option value="below 250ml">Below 250ml</option>
								<option value="250ml-500ml">250ml-500ml</option>
								<option value="500ml-1litre">500ml-1litre</option>
								<option value="1litre-5litre">1litre-5litre</option>
							</select>
				 <script>
				  function validateform4()
				  {
					
var x=document.forms["registration"]["weight"].value;
if(x=="")
{
alert("Please Fill weight");
 document.getElementById("weight").focus();
return false;
}

return true;
				  }
				  </script>
				 </div>   
                
                
                				 
				<div class="form-row">
					<label for="password">Price(in $)</label>
					<input type="text" name="price" id="price" OnChange="return validateform7()" class="input-text" placeholder="" autocomplete="off" required>
					<!--<i class="fas fa-lock"></i>-->
					<script>
				function validateform7()
				{
var x=document.forms["registration"]["price"].value;
if(x=="")
{
alert("Please Fill price");
document.getElementById("price").focus();
return false;
}
var x=document.forms["registration"]["price"].value;
if(isNaN(x))
{
	alert("Enter price in digits");
	document.getElementById("price").focus();
	document.getElementById("price").value="";
	return false;
} 
return true;
				  }
				  </script>
				</div>
				<div class="form-row">
					<label for="password">Manufacture Date</label>
					<input type="date" name="mdate" id="mdate" OnChange="return validateform8()" class="input-text" placeholder="" autocomplete="off" required>
					<!--<i class="fas fa-lock"></i>-->
					<script>
				function validateform8()
				{
var x=document.forms["registration"]["mdate"].value;
if(x=="")
{
alert("Please Fill manufaturing date");
document.getElementById("mdate").focus();
return false;
}
var GivenDate =document.forms["registration"]["mdate"].value;
var CurrentDate = new Date();
GivenDate = new Date(GivenDate);

if(GivenDate>CurrentDate){
    alert('Given date is greater than the current date.');
	document.getElementById("mdate").focus();
	document.getElementById("mdate").value="";
	return false;
}

var x =document.forms["registration"]["mdate"].value;
var d = "2019-01-01";
if(x < d){
    alert('Please enter date above 2019');
	document.getElementById("mdate").focus();
	document.getElementById("mdate").value="";
	return false;
}
/*var y =document.forms["registration"]["dob"].value;
var s = "2000-01-01";
if(y > s){
    alert('Please enter year below 2000');
	document.getElementById("dob").focus();
	document.getElementById("dob").value="";
	return false;
}*/
return true;
				}				
				</script>
				</div>
				<div class="form-row">
					<label for="password">Expire Date</label>
					<input type="date" name="edate" id="edate" OnChange="return validateform10()" class="input-text" placeholder="" autocomplete="off" required>
					<!--<i class="fas fa-lock"></i>-->
					<script>
				function validateform10()
				{
var x=document.forms["registration"]["edate"].value;
if(x=="")
{
alert("Please Fill expire date");
document.getElementById("edate").focus();
return false;
}
var GivenDate =document.forms["registration"]["edate"].value;
var CurrentDate = new Date();
GivenDate = new Date(GivenDate);

if(GivenDate<CurrentDate){
    alert('Given date is less than the current date.');
	document.getElementById("edate").focus();
	document.getElementById("edate").value="";
	return false;
}

/*var x =document.forms["registration"]["mdate"].value;
var d = "2019-01-01";
if(x < d){
    alert('Please enter date above 2019');
	document.getElementById("mdate").focus();
	document.getElementById("mdate").value="";
	return false;
}*/
var y =document.forms["registration"]["edate"].value;
var s = "2025-01-01";
if(y > s){
    alert('Please enter year below 2025');
	document.getElementById("edate").focus();
	document.getElementById("edate").value="";
	return false;
}
return true;
				}				
				</script>
				</div>
				
				<div class="form-row">
					<label for="password">Image</label>
					<input type="file" name="file" id="file" OnChange="return validateform10()" class="input-text" placeholder="" autocomplete="off" required>
					<!--<i class="fas fa-lock"></i>-->
					<!--<script>
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
				</script>-->
				</div>
				<div class="form-row-last">
					<input type="submit" name="submit" class="register" value="Add">
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
  $b=$_POST['cat'];
  $c=$_POST['quant'];
  $d=$_POST['weight'];
  $e=$_POST['price'];
  $f=$_POST['mdate'];
  $g=$_POST['edate'];

  $img=$_FILES["file"]["name"];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
$image=$target_file;


$sql2="insert into products(pname,catid,quantity,pweight,pcost,mdate,edate,image)values('$a','$b','$c','$d','$e','$f','$g','$img')";
 $ch=mysqli_query($con,$sql2);
 
 
if($ch)
{?>
 <script>
 alert("Successfully added");
 window.location='adsaddproducts.php'</script>
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
header("location:/MAINPROJECT/login.html");
?>
