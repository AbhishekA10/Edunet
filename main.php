<html>
<head>
  <title>Edunet</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   
  
 <style>
  .intro {
  background-image: url("images/contact.jpg");
  background-repeat: no-repeat;
  
  }
  .navbar{
  position:fixed;
	}
	
  .logo{
  border:1px solid #d8d8d8;
  text-align:center;
  padding-top:20px;
  padding-bottom:20px;
  }
  
  .box{
  border:1px solid #f0f0f0;
   padding-top:40px;
  padding-bottom:40px;
   padding-right:40px;
  padding-left:40px;
  right:50px;
  
 }
  
  .box:hover {
  box-shadow: 0 0 20px rgba(0,0,0,.3);
}

.flip,.panel{
text-align:center;
background-color:powderblue;
padding:5px;
border:1px solid #c3c3c3;
}

.panel{
text-align:center;
padding:50px;
}
  </style>
  </head>
 <body data-spy="scroll" data-target="navbar" data-offset="50">
 <div class="container-fluid">
 <nav class="navbar navbar-expand-sm bg-white navbar-blue fixed-top"> 
 <div class="col-md-8">
 <img src="images/edupic.jpg">
 </div>
 <div class="col-md-4" "navbar">
 <ul class="navbar-nav">
 <li class="nav-item">
 <a class="nav-link" href="#home">HOME</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="#about">ABOUT</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="#concept">CONCEPT</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="#offerings">OFFERINGS</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="#clients">CLIENTS</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="#contact">CONTACT</a>
 </li>
 </ul>
 </div>
 </nav>
 </div>
<br/>
<br/>
<section id="home">
<br/>
<br/>
 <br/>
<br/>
<br/>
 <div class="container-fluid" id="home">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/htmlpic.jpg"  style="width:100%;">
      </div>

      <div class="item">
        <img src="images/csspic.jpg"  style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/bpic.jpg"  style="width:100%;">
      </div>
	  
	   <div class="item">
        <img src="images/javapic.jpg"  style="width:100%;">
      </div>
	  
	   <div class="item">
        <img src="images/jpic.jpg"  style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</section>
<br/>
<br/>
<br/>
<section id="about">
<br/><br/><br/><br/><br/><br/><div class="container-fluid">
<script>
$(document).ready(function(){
$(".flip").click(function(){
$(".panel").slideToggle("slow");
});
});
</script>

<div class="flip"><h3>About Edu-Net</h3></div>
<div class="panel"><p>Edu-Net was found in the year 2015 which aims to provide support about the web development technologies.Edu-Net helps the users to understand and master the applications such as HTML,CSS,BOOTSTRAP,JAVASCRIPT and JQUERY. We are a custom web development company with advanced infrastructure to create large scale projects with the best client-experiences.We provide functionalities such as interacting with users, connecting to back-end databases and generating results to browsers.We are a custom web development company with years of history, which had enabled us to keep and train the best talents skilled in Microsoft technologies, PHP core and its open source platforms, best UI designs and full stack developers to deliver cost-effective solutions.</p>
</div>
</div>
</section>
<br/>
<br/>
<div class="container-fluid">
<script>
$(document).ready(function(){
$("button").click(function(){
$("#d1").fadeToggle();
$("#d2").fadeToggle("slow");
$("#d3").fadeToggle(1500);
});
});
</script>
<h2 style="text-align:center;">Edu-Net | Achievements</h2>
<br/>
<br/>

<div class="col-md-2">
<br/>
<br/>
<br/>
<br/>

&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<button>Click here to fade</button>
</div>
<div class="col-md-2 ">
<div id="d1" style="width:300px; height:200px; padding:60px; background-color:orange; text-align:center;">
<p>Edu-Net is ranked 1st among all web developing sites</p>
</div>
</div>
<div class="col-md-1"></div>
<div class="col-md-2 ">
<div id="d2" style="width:300px; height:200px; padding:60px; background-color:orange; text-align:center;">
<p>Edu-Net is ranked 5th for web designing technolgies</p>
</div>
</div>
<div class="col-md-1"></div>
<div class="col-md-2 ">
<div id="d3" style="width:300px; height:200px; padding:60px; background-color:orange; text-align:center;">
<p>Edu-Net is ranked among the top 10 sites for interaction with users</p>
</div>
</div>
</div>

<section id="concept">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container-fluid">
<div class="col-md-1"></div>
<div class="col-md-5">
<iframe width="100%" height="315" src="https://www.youtube.com/embed/3Xly2W1Cisc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col-md-1"></div>
<div class="col-md-5">
<h1>Edu-Net | Concept</h1>
<br/>
<p>Edu-Net is a website which provides information and tutorials about web development technologies.</p>
<br/>
<p>Edu-Net helps the users to understand and master the applications such as HTML,CSS,BOOTSTRAP,JAVASCRIPT and JQUERY.</p>
</div>
</div>
</div>
</section>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container-fluid">
<div class="col-md-1"></div>
<div class="col-md-5">
<h1>Edu-Net | Areas</h1>
<br/>
<p>Edu-Net exists to provide support about the web development technologies and to eliminate all the issues that the users have related to them.</p>
<br/>
<p>Edu-Net provides functionalities such as interacting with users, connecting to back-end databases and generating results to browsers.</p>
</div>
<div class="col-md-1"></div>
<div class="col-md-5">
<img src="images/webpic.jpg">
</div>
</div>
<br/>
<br/>
<br/>
<div class="container-fluid">
<div class="col-md-1"></div>
<div class="col-md-5">
<img src="images/aim.jpg">
</div>
<div class="col-md-1"></div>
<div class="col-md-5">
<h1>Edu-Net | Objectives</h1>
<br/>
<h3><b>Primary</b></h3>
<br/>
<p>To improve the basic understanding of the users about the <b>web development concepts.</b></p>
<br/>
<h3><b>Secondary</b></h3>
<br/>
<p>To <b>effectively handle the database management</b> and to be updated about the latest technologies used in the industry.</p>
</div>
</div>
</div>
<br/>
<br/>
<br/>
<div class="container-fluid">
<img src="images/web.jpg">
</div>
<section id="offerings">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container-fluid">
<h1 style="text-align:center;">Edu-Net | Unique Offerings</h1>
</div>
<br/>
<br/>
<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-3 box" style="background-color:#f0f0f0;">
<h4><b>ADVANCED INFRASTRUCTURE</b></h4>
<p style="text-align:left;">We are a custom web development company with advanced infrastructure to create large scale projects with the best client-experiences</p>
</div>
<div class="col-md-3 box">
<h4><b>STRENGTHS</b></h4>
<p style="text-align:left;">Quick & easy communication, collaboration, seamless integrations, and completely secure development processes are our strengths in the market.</p>
</div>
<div class="col-md-3 box" style="background-color:#f0f0f0;">
<h4><b>POOL OF SKILLS</b></h4>
<p style="text-align:left;">Our developers are fluent in large-scale distributed system, micro-service architecture, real-time big data processing, and cloud-native application development and many more in the same line.</p>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-3 box">
<h4><b>LATEST TECHNOLOGIES</b></h4>
<p style="text-align:left;">We are a website development services always strive to catch emerging technologies and trends. </p>
</div>
<div class="col-md-3 box"  style="background-color:#f0f0f0;">
<h4><b>POOL OF TALENTS</b></h4>
<p style="text-align:left;">We are a custom web development company with years of history, which had enabled us to keep and train the best talents skilled in Microsoft technologies, PHP core and its open source platforms, best UI designs and full stack developers to deliver cost-effective solutions.</p>
</div>
<div class="col-md-3 box">
<h4><b>CONSULTANCY</b></h4>
<p style="text-align:left;">We are an offshore web development consulting company acknowledging technologies, tools, and techniques used in web development today to our patrons as a divine duty</p>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-3 box" style="background-color:#f0f0f0;">
<h4><b>SUPPORT</b></h4>
<p style="text-align:left;">Our web development consultants help clientele to take the right decision. We extend our helping hands to select the right talents when you hire our web developer or forming your team.</p>
</div>
<div class="col-md-3 box">
<h4><b>DATA MANAGEMENT</b></h4>
<p style="text-align:left;">We take complete ownership for – All data entry till the app is launched & data management training</p>
</div>
<div class="col-md-3 box" style="background-color:#f0f0f0;">
<h4><b>FUNCTIONS</b></h4>
<p style="text-align:left;">Provide functionalities such as interacting with users, connecting to back-end databases and generating results to browsers.</p>
</div>
</div>
</div>
</section>
<section id="clients">
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<div class="container-fluid">
<div class="col-md-12">
<h1 style="text-align:center">Edu-Net | Clients</h1>
<br/>
<br/>
</div>
<div class="col-md-2"></div>
<div class="col-md-2 logo">
<img src="images/dell.jpg" width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/ibm.jpg"  width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/intel.jpg" width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/at&t.jpg" width="210" height="150">
</div>
</div>
<div class="container-fluid">
<div class="col-md-2"></div>
<div class="col-md-2 logo">
<img src="images/google.jpg" width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/microsoft.jpg"  width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/walmart.jpg" width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/hp.jpg" width="210" height="150">
</div>
</div>
<div class="container-fluid">
<div class="col-md-2"></div>
<div class="col-md-2 logo">
<img src="images/samsung.jpg" width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/apple.jpg"  width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/oneplus.jpg" width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/fedex.jpg" width="210" height="150">
</div>
</div>
<div class="container-fluid">
<div class="col-md-2"></div>
<div class="col-md-2 logo">
<img src="images/amazon.jpg" width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/flipkart.jpg"  width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/cisco.jpg" width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/pepsi.jpg" width="210" height="150">
</div>
</div>
<div class="container-fluid">
<div class="col-md-2"></div>
<div class="col-md-2 logo">
<img src="images/adidas.jpg" width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/nike.jpg"  width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/toyota.jpg" width="210" height="150">
</div>
<div class="col-md-2 logo">
<img src="images/abbott.jpg" width="210" height="150">
</div>
</div>
</section>
<section id="contact">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="intro">
<div class="container-fluid">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="col-md-7"></div>
<div class="col-md-5">
<h1><b>Contact Us</b></h1>
<br/>
<script type="text/javascript">
function validate()
{
	var name=document.f1.name.value;
	var email=document.f1.email.value;
	var mobilelength=document.f1.mobile.value.length;
	var status=false;
	
	if(name=="")
	{
		document.getElementById("namelocation").innerHTML="Please enter your name";
		status=false;
	}
	else
	{
		document.getElementById("namelocation").innerHTML="";
		status=true;
	}
	
	if(mobilelength<10 || mobilelength>10 )
	{
		document.getElementById("mobilelocation").innerHTML="Please enter a valid mobile number";
		status=false;
	}
	else
	{
		document.getElementById("mobilelocation").innerHTML="";
	}
	
	if(email=="")
	{
		document.getElementById("emaillocation").innerHTML="Please enter your email id";
		status=false;
	}
	else
	{
		document.getElementById("emaillocation").innerHTML="";
	}
	return status;
}
</script>
<br/>
<?php

include("educonnect.php");
if(isset($_POST['ok']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$message=$_POST['message'];
	
	$sql=mysqli_query($con,"insert into contact(name,email,mobile,message) values('$name','$email','$mobile','$message')");
	if($sql)
	{
		echo "<script>alert('Inserted Successfully')</script>";
	}
	else
	{
		echo "<script>alert('Not Inserted Successfully')</script>";
	}
}
?>

<form method="post" action="" name="f1" onsubmit="return validate()" >
<div class="form-group">
<input type="text" class="form-control" placeholder="Name" name="name">
<span id="namelocation"></span>
</div>
<div class="form-group">
<input type="email" class="form-control" placeholder="E-mail" name="email">
<span id="emaillocation"></span>
</div>
<div class="form-group">
<input type="tel" class="form-control" placeholder="Mobile Number" name="mobile">
<span id="mobilelocation"></span>
</div>
<div class="form-group">
<textarea class="form-control" placeholder="Message" name="message"></textarea> 
</div>
<div class="form-group">
<input type="submit"  class="btn btn-info" value="Submit" name="ok">
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
</form>
</div>
</div>
</div>
</section>
<br/>
<div class="container-fluid">
<div class="col-md-12">

<center><img src="images/edupic1.jpg"></center>
</div>
</div>
<div class="container-fluid">
<div class="col-md-12">
<p style="text-align:center;">Location:Vishwakarma Nagar Bldg No. 5, Unit no. 6-9, Opp SBI Bank, Ambadi Rd, Vasai Rd (W), Anand Nagar, Vasai West, Vasai-Virar, Maharashtra-401202</p>
<br/>
<p style="text-align:center;">Phone Number:+91 8926890365 / 022-27893601</p>
<br/>
<p style="text-align:center;">E-mail: admin@edunet.com</p>
</div>
</div>
<br/>
<br/>
<div class="container-fluid">
<div class="col-md-12">
<h1 style="text-align:center;">Where are we on a map?</h1>
<br/>
<br/>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.704560093162!2d72.82800171485617!3d19.38194108691306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7aec050bc517b%3A0xd67f3c17a229a9e3!2sEDUnet!5e0!3m2!1sen!2sin!4v1559910319405!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
<br/>
<div class="container-fluid" style="background-color:powderblue;">
<br/>
<div class="col-md-2"></div>
<div class="col-md-4">
<p><b>Copyright@2019|Edu-Net IT Solutions.All Rights Reserved</b></p>
</div>
<div class="col-md-3"></div>
<div class="col-md-2">
<p><b>Devoloped by Edu-Net Pvt. Ltd.</b></p>
</div>
</div>
</body>
</html>