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
			#divv{
				background-color:white;
				width:700px;
				height:330px;
				margin-left:320px;
				margin-top:20px;
				padding:20px;
				box-shadow: 0px 25px 25px rgba(0, 0, 0, 0.3); 
		}
		#left{
			width:270px;
		}
		p{float:left;}
		img{
			position:relative;
			float:right;
		}
		</style>
	
		<title>About Tondapu's Icecream Shop</title>

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
	<div id="left">
	<p>Tondapu Ice cream creates and markets innovative,
		premium ice cream, floats and milshakes,
		providing different flavours with utmost quality and value to consumers.
	You cant buy happiness,but you can buy ice cream. 
		And That's kind of the same thing.If you love ice-cream
		You would love Tondapu's ice-cream :)...</p></div>
		<img src="../Styles/Images/monu.png" alt="Icecream Image"/>
	</div>
</body>
</html>