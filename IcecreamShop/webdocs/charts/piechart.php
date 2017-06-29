<!DOCTYPE html>
<?php include "../../sqlconnect.php" ?>
<html>
	<head>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

		<script type="text/javascript">
			google.charts.load("current", {packages:["corechart"]});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var data = google.visualization.arrayToDataTable([
					['Product', 'Count'],
					<?php 
		 			session_start();
 date_default_timezone_set('Canada/Saskatchewan');
						$date = $_SESSION['date'];
							
					if(isset($date)){
						$query = "SELECT product,sum(count) from gxt76550_statistics where DATE_FORMAT( `solddate` , '%Y-%m-%d' )='$date' group by product";	
						 $exec = mysqli_query($con,$query);
								 while($row = mysqli_fetch_array($exec)){

								 echo "['".$row[0]."',".$row[1]."],";
								 }
									
								}
								else
								{
												$d=date('Y-m-d');
										 $query = "SELECT product,sum(count) from gxt76550_statistics where DATE_FORMAT( `solddate` , '%Y-%m-%d' )='2016-06-23' group by product";
										$exec = mysqli_query($con,$query);
											 while($row = mysqli_fetch_array($exec)){

											 echo "['".$row[0]."',".$row[1]."],";
											 }
								}
								
									
								
					?>
			]);
	 
			var options = {
			  title: 'Statistics Chart',
			  is3D: true,
			};

			var chart = new google.visualization.PieChart(document.getElementById('piechart'));
			chart.draw(data, options);
		  }
		</script>
	</head>
<body>
    <div id="piechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
	</body>
	</html>