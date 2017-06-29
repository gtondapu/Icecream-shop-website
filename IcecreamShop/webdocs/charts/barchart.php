<!DOCTYPE html>
<?php include "../../sqlconnect.php" ?>
<html>
	<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['DayofWeek', 'Iceream', 'Milkshake', 'Float'],
        	<?php 
		 			session_start();

					$dayname = $_SESSION['daylist'];
				 $query = "select DISTINCT s.day,ifnull((SELECT sum(count) from gxt76550_statistics where Product='Icecream' and day=s.day group by day),0) icream,
ifnull((SELECT sum(count) from gxt76550_statistics where Product='Milk Shake' and day=s.day group by day),0) mshake,
ifnull((SELECT sum(count) from gxt76550_statistics where Product='Float' and day=s.day group by day),0) flt from gxt76550_statistics s";
					 $exec = mysqli_query($con,$query);
					 while($row = mysqli_fetch_array($exec)){

					 echo "['".$row[0]."',".$row[1].",".$row[2].",".$row[3]."],";
					 }
					?>
			]);
			
        var options = {
          chart: {
            title: 'Day based statistics',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('barchart'));

        chart.draw(data, options);
      }
	  </script>
	</head>
<body>
	    <div id="barchart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

</body>
</html>