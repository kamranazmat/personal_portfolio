<?php
	// JavaScript Files:
 	
?>


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- jQuery UI -->
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- Angular JS -->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<script src="http://cdn.bootcss.com/bootbox.js/4.4.0/bootbox.js"></script>

<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script src="http://vsn4ik.github.io/bootstrap-checkbox/dist/js/bootstrap-checkbox.min.js" defer></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/1.0.3/ui-bootstrap.min.js"></script>

<script>
	$(document).ready(function() {
	    $('#example').DataTable();
	} );
	$(document).ready(function() {
	    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
	        e.preventDefault();
	        $(this).siblings('a.active').removeClass("active");
	        $(this).addClass("active");
	        var index = $(this).index();
	        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
	        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
	    });
	});
</script>

<!-- Angular Control -->
<script>	
	(function () {
	    var app = angular.module('myApp', []);
	    app.controller('TabController', function () {
	    });					
	})();
</script>

