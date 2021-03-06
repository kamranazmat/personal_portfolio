<!DOCTYPE html>
<html>
	<head>
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
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
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-76959701-1', 'auto');
		  ga('send', 'pageview');

		</script>
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
		
		
		<div id="ho" class="container-fluid">
			<div class="row" align="center" style="padding-top: 20px;">
			  <div class="col-md-6" align="center" id="zoom_img" style="padding-top: 30px;">
			  	<img src="images/kamran.jpg" class="img-circle" width="60%" height="60%" style="box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2), 0 8px 22px 0 rgba(0, 0, 0, 0.19);">
			  </div>
			  <div class="col-md-6" id="name" style="font-size: 65px; color: white; font: bold; padding-top: 200px;" align="center">
			  	<div class="col-md-12" style="font-family: Courier;">Hi, I am Kamran</div>
			  	<div class="col-md-1"></div>
			  	<div class="col-md-10" id="name" style="font-size: 18px; color: white; font: bold; font-family: Courier; height: 60%; width: 80%" align="center">
				  	<p align="justify">I am currently pursuing Master’s degree in Computer Science at University College Dublin, Ireland with specialization in Data Science. I am expecting to graduate with a 2.1 degree in September 2017.</p>
				  	<button class="btn btn-default" onClick="window.open('kamranazmatCV.pdf');">Curriculum Vitae</button>
				</div>
			  </div>		  
			  
			  <div class="col-md-1"></div>
			</div>
		</div>
		<div id="pro">
			<?php include('template/projects.php'); ?>	
		</div>
		<div id="abo">
			<?php include('template/about.php'); ?>
		</div>
		</div>	
	</body>
	
	<?php include('template/footer.php'); ?>
</html>
