<!DOCTYPE html>
<?php include"../sqlconnect.php";
?>
<html>
<head>
			<link rel="shortcut icon" type="image/x-icon" href="../Styles/Images/ice.png"/>

<link rel="stylesheet" href="../Styles/all_orders.css" type="text/css"/>
<style>
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
		</style>
</head>
<body>
	<h1 id="hhh">Tondapu's Icecream Shop</h1>
		<ul>
		  <li><a class="active" href="../index.php">Home</a></li>
		  <li><a href="all_orders.php">All Orders</a></li>
		  <li><a href="report.php">Report</a></li>
		  <li><a href="about.php">About</a></li>
		</ul>
<script type="text/javascript">
function popup(url) {
    popupWindow = window.open( url, 'popUpWindow',
        "height=500,width=500,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes"
    )
}
</script>
<?php
error_reporting(E_ALL);	


	$get_details="select * from gxt76550_orders order by CustomerID desc";
	$del_details=mysqli_query($con,"delete from gxt76550_orders where OrderNumber=0 or CustomerID=0");
		$run_details=mysqli_query($con,$get_details);

	echo "<center><table style='font-family:comic sans ms;font-size:15px;'>
	<tr>
		<th>OrderNumber</th>
		<th>CustomerID</th>
		<th>Product</th>
		<th>Flavor</th>
		<th>Vessel</th>
		<th>Milk</th>
		<th>Soda</th>
		<th>Amount</th>
		<th>DiscountAmount</th>
	</tr>";
	
				while($row=mysqli_fetch_array($run_details))
				{
					$ordernum=$row["OrderNumber"];
					$customer=$row["CustomerID"];
					$product=$row["Product"];
					$flavor=$row["Flavor"];
					$vessel=$row["Vessel"];
					$milk=$row["Milk"];
					$soda=$row["Soda"];
					$amount=$row["Amount"];
					$dis_amount=$row["DiscountAmount"];
					echo
					"<tr>
						<td>".$ordernum."</td>
						<td><a href='cust_details.php?cust_id=$customer' onclick='javascript:popup(this.href); return false;'>".$customer."</a></td>
						<td>".$product."</td>
						<td>".$flavor."</td>
						<td>".$vessel."</td>
						<td>".$milk."</td>
						<td>".$soda."</td>
						<td>".$amount."</td>
						<td>".$dis_amount."</td>
					</tr>";					
				}
				echo "</table></center>";			
					
	?>
</body>
</html>