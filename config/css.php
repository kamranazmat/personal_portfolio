<?php
	// Style Files:
 
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">			
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<!-- jQuery CSS -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<!-- FontAwesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- DataTable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
<!-- 
<link rel="stylesheet" type="text/css" href="config/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="config/css/demo.css" />
<link rel="stylesheet" type="text/css" href="config/css/component.css" />
-->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Other Styles -->
<style>
	html {
	  position: relative;
	  min-height: 100%;
	}
	body {
	  /* Margin bottom by footer height */
	  margin-bottom: 60px;
	}
	.footer {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  /* Set the fixed height of the footer here */
	  height: 60px;
	  background-color: #f5f5f5;
	}
	#btn_debug {
	}
	#console_debug {
	}
	#console_debug pre {
	}
	#logo img {
    	width: 99.5%;
    	height: 15%;
    	border: 1px solid black;
	}
	.col1 {
	    background-color: #ddf;
	    float: left;
	}
	.col2 {
	    background-color: #dfd;
	    float: none;
	}
	.col3 {
	    background-color: #fdd;
	    float: right;
	}
	.verticalLine {    border-left: thick solid #ff0000;}
	
	
	/*  bhoechie tab */
	div.bhoechie-tab-container{
	  z-index: 10;
	  background-color: #ffffff;
	  padding: 0 !important;
	  border-radius: 4px;
	  -moz-border-radius: 4px;
	  border:1px solid #ddd;
	  margin-top: 20px;
	  margin-left: 50px;
	  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
	  box-shadow: 0 6px 12px rgba(0,0,0,.175);
	  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
	  background-clip: padding-box;
	  opacity: 0.97;
	  filter: alpha(opacity=97);
	}
	div.bhoechie-tab-menu{
	  padding-right: 0;
	  padding-left: 0;
	  padding-bottom: 0;
	}
	div.bhoechie-tab-menu div.list-group{
	  margin-bottom: 0;
	}
	div.bhoechie-tab-menu div.list-group>a{
	  margin-bottom: 0;
	}
	div.bhoechie-tab-menu div.list-group>a .glyphicon,
	div.bhoechie-tab-menu div.list-group>a .fa {
	  color: #5A55A3;
	}
	div.bhoechie-tab-menu div.list-group>a:first-child{
	  border-top-right-radius: 0;
	  -moz-border-top-right-radius: 0;
	}
	div.bhoechie-tab-menu div.list-group>a:last-child{
	  border-bottom-right-radius: 0;
	  -moz-border-bottom-right-radius: 0;
	}
	div.bhoechie-tab-menu div.list-group>a.active,
	div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
	div.bhoechie-tab-menu div.list-group>a.active .fa{
	  background-color: #5A55A3;
	  background-image: #5A55A3;
	  color: #ffffff;
	}
	div.bhoechie-tab-menu div.list-group>a.active:after{
	  content: '';
	  position: absolute;
	  left: 100%;
	  top: 50%;
	  margin-top: -13px;
	  border-left: 0;
	  border-bottom: 13px solid transparent;
	  border-top: 13px solid transparent;
	  border-left: 10px solid #5A55A3;
	}
	
	div.bhoechie-tab-content{
	  background-color: #ffffff;
	  /* border: 1px solid #eeeeee; */
	  padding-left: 20px;
	  padding-top: 10px;
	}
	
	div.bhoechie-tab div.bhoechie-tab-content:not(.active){
	  display: none;
	}
</style>
