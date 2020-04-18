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
		</table><br>
		<div>
			<center><span class="blue-text text-darken-2">Stay Safe and Stay at Home </span></center>
		</div><br>
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