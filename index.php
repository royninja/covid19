<?php
	header("refresh: 60; url = http://127.0.0.1/covid");
	$confirmUrl="https://api.covid19india.org/data.json";
	$confirmJson=file_get_contents($confirmUrl);
	$confirmArray=json_decode($confirmJson,true);
	header('Cache-Control: no-cache');
header('Pragma: no-cache');
?>
<html>
<head>
	<title></title>
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
	<nav>
    <div class="nav-wrapper grey darken-1">
      <a href="#!" class="brand-logo right">COVID-19 DASHBOARD</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="left hide-on-med-and-down">
		<li><a href="index.php">Home</a></li>
        <li><a href="index.php?page=">Update</a></li>
        <li><a href="index.php?page=">About</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="index.php">Home</a></li>
    <li><a href="index.php?page=">Update</a></li>
    <li><a href="index.php?page=">About</a></li>
  </ul>
 <div class="container">
<a class="btn-floating btn-large pulse red"><i class="material-icons">Live</i></a>
		 <table class="striped centered responsive-table">
			<thead>
				<tr>
				  <th class="red-text">Confirmed</th>
				  <th class="blue-text">Active</th>
				  <th class="green-text">Recovered</th>
				  <th class="grey-text">Death</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="red-text"><a class="red-text count"><?php echo $confirmArray['statewise'][0]['confirmed']; ?></a>(+<a class="red-text count"><?php echo $confirmArray['statewise'][0]['deltaconfirmed']; ?></a>)</td>
					<td class="blue-text"><a class="count"><?php echo $confirmArray['statewise'][0]['active']; ?></a></td>
					<td class="green-text"><a class="green-text count"><?php echo $confirmArray['statewise'][0]['recovered']; ?></a>(+<a class="green-text count"><?php echo $confirmArray['statewise'][0]['deltarecovered']; ?></a>)</td>
					<td class="grey-text"><a class="grey-text count"><?php echo $confirmArray['statewise'][0]['deaths']; ?></a> (+<a class="count grey-text"><?php echo $confirmArray['statewise'][0]['deltadeaths']; ?></a>)</td>
				</tr>
			</tbody>
			</table>
			
		<br>
		<div>
		<center><span class="blue-text text-darken-2">Stay Safe and Stay at Home </span></center>
		</div>
		<br>
    <!-- Note that "m8 l9" was added -->
			<p class="grey-text">[*]Data Collected from Govt of India || <a class="green-text">Last Check: <?php echo $confirmArray['statewise'][0]['lastupdatedtime']; ?></a></p>
		 <table class="centered responsive-table">
			<thead>
				<tr>
				  <th>Name</th>
				  <th class="red-text">Confirmed</th>
				  <th class="blue-text">Active</th>
				  <th class="green-text">Recovered</th>
				  <th class="grey-text">Death</th>
				  <th class="green lighten-3">Last check</th>
				</tr>
			</thead>
			<tbody>
				<?php
				for($i=1; $i<=36; $i++){?>
				<tr>
					<td><?php echo $confirmArray['statewise'][$i]['state']; ?></td>
					<td class="red-text"><a class="red-text count"><?php echo $confirmArray['statewise'][$i]['confirmed']; ?></a>(+<a class="red-text count"><?php echo $confirmArray['statewise'][$i]['deltaconfirmed']; ?></a>)</td>
					<td class="blue-text"><a class="count"><?php echo $confirmArray['statewise'][$i]['active']; ?></a></td>
					<td class="green-text"><a class="green-text count"><?php echo $confirmArray['statewise'][$i]['recovered']; ?></a>(+<a class="green-text count"><?php echo $confirmArray['statewise'][$i]['deltarecovered']; ?></a>)</td>
					<td class="grey-text"><a class="grey-text count"><?php echo $confirmArray['statewise'][$i]['deaths']; ?></a> (+<a class="count grey-text"><?php echo $confirmArray['statewise'][$i]['deltadeaths']; ?></a>)</td>
					<td class="lighten-3-text"><?php echo $confirmArray['statewise'][$i]['lastupdatedtime']; ?></td>
				</tr>
				<?php }
			?>
			</tbody>
      </table>
     

	</div>
 <footer class="page-footer white">
              <div class="col l4 offset-l2 s12 center">
                <h5 class="white-text">COVID-19 DASHBOARD</h5>
                <ul>
                  <li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRpZqORVa-LMpmtL9EB3hjf96YQS7NZYhYLibNMX3R06ei25jzE&usqp=CAU"/></li>
                  <li><a class="waves-effect waves-light btn blue-grey darken-4" href="https://github.com/royninja/covid19">OPENSOURCE COVID-19 DASHBOARD</a></li>
                  <br>
				  <li><a class="waves-effect waves-light btn blue-grey darken-4" href="https://api.covid19india.org/data.json">covid19inda API</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright blue-grey">
            <div class="container">
            It's a opensource project
            </div>
          </div>
        </footer>	
</body>
</html>