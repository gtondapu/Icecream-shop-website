<!DOCTYPE html>
<?php include"../sqlconnect.php";
session_start();

?>
<html>
	<head>
				<link rel="shortcut icon" type="image/x-icon" href="../Styles/Images/ice.png"/>

	<style>
	p{
		font-size:18px;
		font-family:comic sans ms;
	}
	label{
		font-size:15px;
		font-family:comic sans ms;
		
	}
		h1{
			margin:0 auto;	
			text-shadow: 0 0 25px #FF0000, 0 0 25px #0000FF;
			color:white;
			font-size:50px;
			line-height:100px;
			font-family:comic sans ms;
			vertical-align:middle;
			text-align:center;
		}
			ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #EE6DF9;
			}

			li {
				float: left;
			}

			li a {
				display: inline-block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
				font-size:20px;;
				font-family: comic sans ms;
					   text-shadow: 0 0 25px #FF0000, 0 0 25px #0000FF;

			}

			li a:hover {
				background-color: #111;
			}
		#button{
			
			width:90px;
			height:35px;
			color:black;
			font-size:18px;
			font-family:comic sans ms;
			background:deepskyblue;
		}
			
			#date{
	
	width:190px;
	height:30px;
	color:black;
	font-size:18px;
	font-family:comic sans ms;
	background:deepskyblue;
}
		</style>
		<title>Report</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
    $("select").change(function(){
		if(this.value === 'Monday'){
			<?php
			session_start();
			$_SESSION['daylist']="Monday";

			
			?>
        alert("The text has been changed.");
		}
    });
});
<?php

			$_SESSION['date']=$_POST["date"];

?>

		</script>
	</head>
<body>
<center>
	<h1 id="hhh">Tondapu's Icecream Shop</h1>
	<ul>
	  <li><a class="active" href="../index.php">Home</a></li>
	  <li><a href="all_orders.php">All Orders</a></li>
	  <li><a href="report.php">Report</a></li>
	  <li><a href="about.php">About</a></li>
	</ul>
	<br><br>
					<figure>

	<form id="date_form" method="post">
			<label>Select a date to display the piechart</label>
<input id="date" type='date' name='date' placeholder="dd-mm-yyyy"/>
		<input  id="button" type="submit" name="submit" value="Submit"/>
	</form>	
	<br>
	<iframe src="charts/piechart.php" width="800" height="500"></iframe><br>
		
  <figcaption>	<p>Sales Report based on date</p></figcaption>
</figure>
	
	
	<figure>

	<br>
	
	<iframe src="charts/barchart.php"	width="800" height="500"></iframe>
	
  <figcaption>	<p>Sales Report based on day of a week</p></figcaption>
</figure>
</center>
	
</body>
</html>