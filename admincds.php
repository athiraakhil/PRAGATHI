<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
if($login)
{
    ?>
	<?php
include 'co.php';
$q="select * from designation";
$sql=mysqli_query($con,$q);
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
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Members Details</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i> CDS Details</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-bars"></i><a href="admincds.php">Add</a></li>
                            <li><i class="fa fa-book"></i><a href="adminviewcds.php">View</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>ADS Details</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <!--<li><i class="fa fa-bars"></i><a href="ui-tabs.html">Add </a></li>-->
                            <li><i class="fa fa-book"></i><a href="adminviewads.php">View Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Unit Member Details</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!--<li><i class="fa fa-table"></i><a href="tables-basic.html">Add Job Vacancies </a></li>-->
                            <li><i class="fa fa-table"></i><a href="adminviewmembers.php">view Details</a></li>
                        </ul>
                    </li>
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Unit  Details</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!--<li><i class="fa fa-table"></i><a href="tables-basic.html">Add Job Vacancies </a></li>-->
                            <li><i class="fa fa-table"></i><a href="adminunit.php">view Details</a></li>
                        </ul>
                    </li>
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>User Details</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!--<li><i class="fa fa-table"></i><a href="tables-basic.html">Add Job Vacancies </a></li>-->
                            <li><i class="fa fa-table"></i><a href="adminviewusers.php">view Details</a></li>
                        </ul>
                    </li>
                    <!--<li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>View Profile</a>
                    </li>-->

                    <li class="menu-title">Exhibition</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Exhibition Details</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="adminviewexh.php">View Details </a></li>
                            <!--<li><i class="fa fa-table"></i><a href="tables-data.html">view Salary Details</a></li>-->
                        </ul>
                    </li>
                    <!--<li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Leave Status</a>
                    </li>-->

                    <!--<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Staff Details </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Add Staff Details</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html"> View Staff Details</a></li>
                        </ul>
                    </li>-->
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
		<?php echo"<font size=3 color=pink> WELCOME: $type";?>
            <div class="top-left">
                <div class="navbar-header">
                    <!--<a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>-->
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <!--<a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span> </span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>-->

                            <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <!--<a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>-->
                </div>
                <div class="login-form">
                    <form name="registration" method="POST">
					<h1><center><font color=blue>CDS Details</center></h1>
                        <div>
                            <label>Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="" onChange="return validateform1()" autocomplete="off" required>
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
	document.getElementById("name").value="";
	return false;
}
var x=document.forms["registration"]["name"].value;
if(x.length<2 || x.length>30)
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
                            <label>Address</label>
                            <textarea name="address" id="address" class="form-control" placeholder="" onChange="return validateform2()" autocomplete="off" required></textarea>
							<script>
				  function validateform2()
				  {
					  var x=document.forms["registration"]["address"].value;
if(x=="")
{
alert("Please Fill address");
document.getElementById("address").focus();
return false;
}
return true;
				  }
				  </script>
                        </div>
						<div class="form-group">
                            <label>Designation</label>
							<select  name="des" id="des"  onChange="return validateform2()" class="form-control" placeholder="" required>
								<option value="">---- Designation ----</option>
								<?php
								while($fetch=mysqli_fetch_array($sql))
								{
									?>
									<option value="<?php echo $fetch
									['desid']?>"><?php echo $fetch['dname']?> <?php
								}
								?>
							</select>
							<script>
				  function validateform2()
				  {
					  var x=document.forms["registration"]["des"].value;
if(x=="")
{
alert("Please Fill designation");
document.getElementById("des").focus();
return false;
}
return true;
				  }
				  </script>
                        </div>
						<div class="form-group">
                            <label>Adhar number</label>
                            <input type="text" name="anumber" id="ano" class="form-control" placeholder="" onChange="return validateform4()" autocomplete="off" required>
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
						<div class="form-group">
                            <label>Date of birth</label>
                            <input type="date" name="dob" id="dob" class="form-control" placeholder="" onChange="return validateform3()" autocomplete="off" required>
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
                        <div class="form-group">
                            <label>contact number</label>
                            <input type="text" id="cno" name="cnumber" autocomplete="off" class="form-control" placeholder="" onChange="return validateform6()" required>
							<script>
				function validateform6()
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
	return false;
}
return true;
				}
				</script>
                        </div>
						<!--<div class="form-group">
                            <label>Username</label>
                            <input type="text" id="uname" name="uname" autocomplete="off" class="form-control" placeholder="" onChange="return validateform7()">
							<script>
				function validateform7()
				{
				var x=document.forms["registration"]["uname"].value;
if(x=="")
{
alert("Please Fill username");
 document.getElementById("uname").focus();
return false;
}

else if(document.registration.uname.value.length<6)
{
	alert("Enter username with more than six characters");
	document.getElementById("uname").focus();
	document.getElementById("uname").value="";
	return false;
}	
return true;
				}
				</script>
                        </div>-->
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="pass" name="pass" autocomplete="off" class="form-control" placeholder="" onChange="return validateform8()" required>
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
						<div class="form-group">
                            <label>confirm Password</label>
                            <input type="password" id="cpass" name="cpass" autocomplete="off" class="form-control" placeholder="" onChange="return validateform9()" required>
							<script>
				function validateform9()
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
						<div class="form-group">
                            <label>email</label>
                            <input type="email" id="email" name="email" autocomplete="off" class="form-control" placeholder=""  required>
						
                        </div>
                        <!--<div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                        </div>-->
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="submit" >Register</button>
                        <!--<div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Register with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Register with twitter</button>
                            </div>
                        </div>-->
                        <!--<div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="#"> Sign in</a></p>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>

    
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->

    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                  series: [
                  [0, 18000, 35000,  25000,  22000,  0],
                  [0, 33000, 15000,  20000,  15000,  300],
                  [0, 15000, 28000,  15000,  30000,  5000]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>
</body>
</html>
<?php 
include 'co.php'; 
if(isset($_POST['submit']))
{
  $a=$_POST['name'];
  $b=$_POST['address'];
  $c=$_POST['dob'];
  $f=$_POST['des'];
  $d=$_POST['anumber'];
  $e=$_POST['cnumber'];
  //$g=$_POST['uname'];
  $h=$_POST['pass'];
  //$i=$_POST['email'];
   //echo "<script>alert('$g');</script>";
$sq="insert into login(username,password,usertype,status)values('$e','$h',4,1)";
if(mysqli_query($con,$sq))
{
	$s=mysqli_query($con,"select logid from login where username='$e'");
	$r=mysqli_fetch_array($s,MYSQLI_ASSOC);
	$lid=$r['logid'];
	//echo "<script>alert('$lid');</script>";
$sql="insert into reg(logid,name,address,dob,desg,ano,cno)values('$lid','$a','$b','$c','$f','$d','$e')";
 $ch=mysqli_query($con,$sql);
if($ch)
{?>
	 <script>
 alert("Regesteration Successfull");
 window.location='admincds.php'
</script>
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
mysqli_close($con);
?>
<?php
}
}

else
header("location:/MAINPROJECT/login.html");
?>
