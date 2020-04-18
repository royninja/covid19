<?php include('config.php'); ?>
<html>
<head>
	<title>COVID19 DASHBOARD</title>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
        jQuery(document).ready(function($) {
            $('.count').counterUp({
                delay: 10,
                time: 2000
            });
        });
		 $(document).ready(function(){
			$('.sidenav').sidenav();
		});
    </script>
</head>
<body>
	<?php include('nav.php'); ?>
<div class="container">
	<?php include('content.php'); ?>
</div>


<footer class="page-footer white">
    <?php include('footer.php'); ?>
</footer>	
</body>
</html>