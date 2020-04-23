<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
$log=$_SESSION['loginid'];

if($login)
{
    ?>
<?php
include 'co.php';
$q="select * from district";
$sql=mysqli_query($con,$q);

?>
<!DOCTYPE html>
<html>
<head>
  <title>table</title>
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
  <!--<div class="header-w3layouts">
    <div class="container">

     
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
        
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
      <div class="logo-nav-left1">
        <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <!--<div class="navbar-he<div class="site-navbar-wrap js-site-navbar bg-white">-->
		  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
		  
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="">Pragathi</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active">
                        <a href="adsindex.php">Home</a>
                      </li>
					  <li><a href="adsindex.php"><font size="3" color="black">Home</font></a></li>
					  <!--<li class="has-children">
                        <a href=""><font size="3" color="black">Profile</font></a>
                        <ul class="dropdown arrow-top">
                          <li><a href="cdschangepswd.php">Change password</a></li>
                          <!--<li><a href="userreg.php">View Profile</a></li>-->                                                   
                        <!--</ul>
                      </li>-->
					  <!--<li class="has-children">
                        <a href=""><font size="3" color="black">Members</font></a>
                        <ul class="dropdown arrow-top">
                          <li><a href="cdsaddads.php">Add Ads</a></li>
                          <li class="has-children">
						  <a href="">View</a>
						  <ul class="dropdown arrow-top">
                          <li><a href="cdsviewads.php">Ads</a></li>                         
                          <li><a href="cdsviewmember.php">Unit members</a></li> 						  
                        </ul>
						  </li>                                                   
                        </ul>
                      </li>-->
					  <!--<li class="has-children">
                        <a href=""><font size="3" color="black">Products</font></a>
                        <ul class="dropdown arrow-top">
                          <li><a href="adsaddproducts.php">Add </a></li>
                          <li><a href="adsviewproducts.php">View </a></li>                                                   
                        </ul>
                      </li>-->
					  <!--<li class="has-children">
					  <a href=""><font size="3" color="black">Exhibition</font></a>
					  <ul class="dropdown arrow-top">
                          <li><a href="addexhibition.php">Add</a></li>                         
                          <li><a href="cdsviewexh.php">View</a></li> 						  
                        </ul>
						</li>-->
                      <!--<li class="has-children">
                        <a href="">Create account</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="reg.php">Unit member</a></li>
                          <li><a href="userreg.php">User</a></li>                                                   
                        </ul>
                      </li>-->
                      <!--<li><a href="login.html">Login</a></li>-->
					  <li><a href="adsviewproducts.php"><font size="3" color="black">Products</font></a></li>
					  <li><a href="logout.php"><font size="3" color="black">Logout</font></a></li>
                      <!--<li><a href="index.html">About</a></li>
                      <li><a href="index.html">Contact</a></li>-->
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <style type="text/css">
    th{
      width: 150px;
      height: 50px;
      background-color:#4caf50;
      color: white;

    }
    td{
      width: 100px;
      height: 30px;
      

    }
    th,td{
      text-align: left;
      padding: 8px;
    }

  .button {
	  background-color: #f44336;
	  font-size: 16px;
	  padding: 14px 40px;
	  }
	  
    
    
  </style>

</head>
<body style="background: url(img/.jpg); min-height:900px;">

<br><br>
<form action="adschekinsert.php" id="prod" method="POST" aign="center">    		
    
    	
    			
    			 
    		   <h2><center>Enter detalis</center></h2>

<table align="center">
                    <tr>
					<td><label for ="mob">Name:</label></td>
					<td><input type="text" name="name"></td>
					</tr>
					<tr>
					<td><label for ="mob">Address:</label></td>
					<td><textarea name="address"></textarea></td>
					</tr>
    				<tr>
					<td><label for ="mob">District:</label></td>
					<td><center><select name="district" id="dist" onChange="return validateform5()" style="width: 200px; height: 2.2em;">
								<option value="">---- SELECT ----</option>
								<?php
								while($fetch=mysqli_fetch_array($sql))
								{
									?>
									<option value="<?php echo $fetch
									['distid']?>"><?php echo $fetch['dname']?> <?php
								}
								?>
							</select></center></td>
					</tr>
    				<tr>
					<td><label for ="mob">street:</label></td>
					<td><input type="text" name="street"></td>
					</tr>
                    <tr>
					<td><label for ="mob">Pincode:</label></td>
					<td><input type="text" name="pin"></td>
					</tr>
					<tr>
					<td><label for ="mob">Mob no:</label></td>
					<td><input type="text" name="mob"> </td>
					</tr>
					<!--<tr>
					<td><label for ="mob">Expire Date:</label></td>
					<td><input type="text" name="edte"> </td>
					</tr>-->
					 
              <!--<tr><td><input type="submit" value="OK" id="btnadd" name="submit"></td></tr>-->					  
	        </table>
			
	          	
	         	
   
	
     <center> <button type="submit" class="button" name="submit"><font color="white">Pay Now</font></button></center>
	  
    </form>
			
</body>
</html>

  <?php
}
else
header("location:/MAINPROJECT/login.html");
?>
