<!DOCTYPE html>
<?php include"../sqlconnect.php";
session_start();

?>
<html>
	<head>
				<link rel="shortcut icon" type="image/x-icon" href="../Styles/Images/ice.png"/>

	<style>
	body{
	background: url('../Styles/Images/wallpaper.jpg');
}
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
#divv{
	background-color:white;
	width:700px;
	margin-left:320px;
	margin-top:20px;
	padding:10px;
    box-shadow: 0px 25px 25px rgba(0, 0, 0, 0.3); 

}

table tr td{
	font-size:15px;
	font-family:comic sans ms;
	padding-left:10px;
}
button{
	
	width:150px;
	height:35px;
	color:black;
	font-size:18px;
	font-family:comic sans ms;
	background:deepskyblue;
}
		</style>
		<script>
		function printDiv(divName) {
			 var printContents = document.getElementById(divName).innerHTML;
			 var originalContents = document.body.innerHTML;

			 document.body.innerHTML = printContents;

			 window.print();

			 document.body.innerHTML = originalContents;
		}
		</script>
		<title>Thank you for the order @Tondapu's Icecream Shop</title>

	</head>
<body>

	<h1 id="hhh">Tondapu's Icecream Shop</h1>
	<ul>
	  <li><a class="active" href="../index.php">Home</a></li>
	  <li><a href="all_orders.php">All Orders</a></li>
	  <li><a href="report.php">Report</a></li>
	  <li><a href="about.php">About</a></li>
	</ul>
	<div id="divv">
	<div id="print">
	<?php
		error_reporting(E_ALL);	

		$ordernum=$_SESSION["ordernum"];
		$product=$_SESSION["product"];
		$flavor=$_SESSION["flavor"];
		$vessel=$_SESSION["vessel"];
		$milk=$_SESSION["milk"];
		$soda=$_SESSION["soda"];
		$amount=$_SESSION["amount"];
		$dis_amount=$_SESSION["dis_amount"];
		$ins_fname=$_SESSION["ins_fname"];
		$ins_lname=	$_SESSION["ins_lname"];
		$ins_email=$_SESSION["ins_email"];
		echo "	<h2>Thank you for the order $ins_fname $ins_lname!</h2>";
										echo "<table><tr><td>Name of customer: </td><td>$ins_fname $ins_lname</td></tr>";
			echo "<tr><td>Email address: </td><td>$ins_email</td></tr>";
				echo	"<tr><td>Order Number: </td><td>$ordernum</td></tr>";
								echo "<tr><td>Product: </td><td>$product</td></tr>";
								echo "<tr><td>Flavor: </td><td>$flavor</td></tr>";
								echo "<tr><td>Vessel: </td><td>$vessel</td></tr>";
								echo "<tr><td>Milk: </td><td>$milk</td></tr>";
								echo "<tr><td>Soda: </td><td>$soda</td></tr>";
								echo "<tr><td>Amount: </td><td>$$amount</td></tr>";
								echo "<tr><td>Amount after discount: </td><td>$$dis_amount</td></tr></table>";
		
	?>

	<p>Please wait for 10 minutes while your order is being prepared...</p>
	</div>
	<div>
	<center><button onclick="printDiv('print');">Print the order!</button></center>
	
	</div>
	<div>
	
</body>
</html>