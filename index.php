<!DOCTYPE html>
<html>
	<head>
		<title>Kamran Azmat - Personal Portfolio</title>
		<?php
			include('config/css.php');
			include('config/js.php');
		?>
		<style>
			.navbar-default .navbar-nav>li>a {				
				padding-top: 30px;
				padding-bottom: 30px;
				padding-right: 30px;
				padding-left: 30px;
			}
			#zoom_img img:hover{
				-moz-transform:scale(1.1); 
				-webkit-transform:scale(1.1);
				-o-transform:scale(1.1);
			}
			
		</style>
		<style>
			#loading {
			   width: 100%;
			   height: 100%;
			   top: 0px;
			   left: 0px;
			   position: fixed;
			   display: block;
			   opacity: 0.7;
			   background-color: #fff;
			   z-index: 99;
			   text-align: center;
			}
			
			#loading-image {
			  position: absolute;
			  top: 100px;
			  left: 240px;
			  z-index: 100;
			}
		</style>
		<script>
			$(document).ready(function () {
		        $('ul.nav > li').click(function (e) {
		            e.preventDefault();
		            $('ul.nav > li').removeClass('active');
		            $(this).addClass('active');                
		        });
		        $("#pro").hide();
		        $("#abo").hide();
		        $("#project").click(function(){
			        $("#ho").hide();
			        $("#pro").show();
			        $("#abo").hide();
			    })
			    $("#home").click(function(){
			        $("#ho").show();
			        $("#pro").hide();
			        $("#abo").hide();
			    });
			    $("#about").click(function(){
			        $("#ho").hide();
			        $("#pro").hide();
			        $("#abo").show();
			    });             
		    });
		    
		</script>	
			
	</head>
	<body style="background-color: #0089e6;">		
		<div id="pagewrap" class="pagewrap">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <ul class="nav navbar-nav navbar-left">
		      	<a class="navbar-brand" href="." style="padding-top: 0px"><img src="images/logo.gif" height="200" width="120"/></a>
		      </ul>		      
		    </div>
		
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li role="presentation" class="active" id="home" style="text-align: right;"><a href="#">Home</a></li>
			    <li role="presentation" id="project" style="text-align: right;"><a href="#">Projects</a></li>
			    <li role="presentation" id="about" style="text-align: right;"><a href="#">About Me</a></li>			    	        
		      </ul>		      
		    </div>
		  </div>
		</nav>
		<!-- <div class="column">
			<p>To start the page loading animation, click the following link:</p>
			<p><a class="pageload-link" href="#page-2">Show Page Loader</a></p>
		</div> -->
		<div class="col-md-4"></div>
		<div class="col-md-6" id="loading">
		  <img id="loading-image" src="images/ajax-loader.gif" alt="Loading..." />
		</div>
		<div id="ho" class="container-fluid">
			<div class="row" align="center" style="padding-top: 20px;">
			  <div class="col-md-6" align="center" id="zoom_img" style="padding-top: 30px;">
			  	<img src="images/kamran.jpg" class="img-circle" width="60%" height="60%" style="box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2), 0 8px 22px 0 rgba(0, 0, 0, 0.19);">
			  </div>
			  <div class="col-md-6" id="name" style="font-size: 65px; color: white; font: bold; padding-top: 200px;" align="center">
			  	<div class="col-md-12" style="font-family: Courier;">Hi, I am Kamran</div>
			  	<div class="col-md-1"></div>
			  	<div class="col-md-10" id="name" style="font-size: 18px; color: white; font: bold; font-family: Courier; height: 60%; width: 80%" align="center">
				  	<p align="justify">I'm an undergraduate studying at West Bengal University of Technology, Kolkata, West Bengal - WBUT. I expect to graduate with a Bachelors degree in June 2016.</p>
				</div>
			  </div>		  
			  
			  <div class="col-md-1"></div>
			</div>
		</div>
		<div id="pro">
			<?php include('template/project.php'); ?>	
		</div>
		<div id="abo">
			<?php include('template/about.php'); ?>
			<!-- <div class="container">
				<div class="col-md-3" align="left"><img src="images/left.png" style="height: 80px; width: 230px; float: left; size: auto"/></div>
			    <div class="col-md-6"></div>
			    <div class="col-md-3" align="right"><img src="images/right.png"  style="height: 80px; width: 230px; float: right; size: auto"/></div>
			</div> -->			
		</div>
	</div>
	<script language="javascript" type="text/javascript">
	     $(window).load(function() {
	     $('#loading').hide();
	  });
	</script>
	</body>
	<?php include('template/footer.php'); ?>
</html>