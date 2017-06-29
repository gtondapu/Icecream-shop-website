<!DOCTYPE html>
<?php include"sqlconnect.php";?>
<html>
	<head>
				<link rel="shortcut icon" type="image/x-icon" href="Styles/Images/ice.png"/>

	<link rel="stylesheet" href="Styles/search.css" type="text/css"/>
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
			p{
				background-color:yellow;
				color:red;
				font-family:comic sans ms;
				text-align:center;
			}
		</style>
	</head>
	<body>
		<h1 id="hhh">Tondapu's Icecream Shop</h1>
			<ul>
			  <li><a class="active" href="index.php">Home</a></li>
			  <li><a href="webdocs/all_orders.php">All Orders</a></li>
			  <li><a href="webdocs/report.php">Report</a></li>
			  <li><a href="webdocs/about.php">About</a></li>
			</ul>
	<?php
		error_reporting(E_ALL);	
		session_start();

		$ordernum=$_GET["ordernum"];
		$product=$_GET["product"];
		$flavor=$_GET["flavor"];
		$vessel=$_GET["vessel"];
		$milk=$_GET["milk"];
		$soda=$_GET["soda"];
		$amount=$_GET["amount"];
		$dis_amount=$_GET["dis_amount"];
		
		$_SESSION["ordernum"]=$ordernum;

		$_SESSION["product"]=$product;
		$_SESSION["flavor"]=$flavor;
		$_SESSION["vessel"]=$vessel;
		$_SESSION["milk"]=$milk;
		$_SESSION["soda"]=$soda;
		$_SESSION["amount"]=$amount;
		$_SESSION["dis_amount"]=$dis_amount;
		if ($_SERVER['REQUEST_METHOD'] = 'POST') {
		if(isset($_POST['placeorder']))
		{
			$ins_fname = trim($_POST['fname']);
			$ins_lname = trim($_POST['lname']);
			$ins_email = trim($_POST['email']);
			$_SESSION["ins_fname"]=$ins_fname;
			$_SESSION["ins_lname"]=$ins_lname;
			$_SESSION["ins_email"]=$ins_email;
			$check_cust=mysqli_query($con,"select EmailAddress from gxt76550_customers where EmailAddress='$ins_email'");
			$rowcount=mysqli_num_rows($check_cust);
			if($rowcount>0){							
			}
			else{
				//adding customer to database
				$ins_cust="insert into gxt76550_customers (FirstName,LastName,EmailAddress) values ('$ins_fname','$ins_lname','$ins_email')";	
				$run_cust=mysqli_query($con,$ins_cust) or die("SQL Error: " . mysqli_error($con));
				if($run_cust){
					$re= "<script>alert('new customer is added to db');</script>";
				}
				else $re= "<script>alert('customer is not added to db');</script>";
					
				//added customer
				}
						
			//get customer
			$get_cust=mysqli_query($con,"select CustomerID from gxt76550_customers where EmailAddress='$ins_email'");
			while($cust=mysqli_fetch_array($get_cust))
			{
				$cust_id=$cust['CustomerID'];		
			}						
			//get customer	done	
		
			//place order
			$sql="INSERT into gxt76550_orders (OrderNumber,CustomerID,Product,Flavor,Vessel,Milk,Soda,Amount,DiscountAmount) values ('$ordernum','$cust_id','$product','$flavor','$vessel','$milk','$soda','$amount','$dis_amount')";
			$res=mysqli_query($con, $sql) or die("SQL Error: " . mysqli_error($con));
			//place order done

			$get_count=mysqli_query($con,"select Count from gxt76550_statistics where Product='$product'");
			while($cnt=mysqli_fetch_array($get_count))
			{
				$count=$cnt['Count'];		
			}	
			$add_stats="INSERT INTO gxt76550_statistics (SoldDate,Product,Count,Day) VALUES (NOW(),'$product',1,'Monday')";
			$run_stats=mysqli_query($con,$add_stats);
			header('Location: webdocs/thanks.php');

		}

		}
	?>
	<center>
		<form name="myform" method="POST">
			<table id="myTable">
			
				<tr>
					<td id="l">			
						<label>Enter your first name:</label>	
					</td>
					<td>	
						<input id="inp" type="text" name="fname" placeholder="Your First-name" value="<?php echo (isset($result_fname))?$result_fname:'';?>" required/>	
					</td>	
					<td></td>
				</tr>
				<tr>
					<td id="l">	
						<label>Enter your last name:</label>	
					</td>	
					<td colspan="2">	
						<input id="inp" type="text" name="lname" placeholder="Your Last-name" value="<?php echo (isset($result_lname))?$result_lname:'';?>" required/>	
					</td>
				</tr>
				<tr>
					<td id="l">			
						<label>Enter your email:</label>	
					</td>
					<td colspan="2">	
						<input id="inp" type="email" name="email" placeholder="Your Email" value="<?php echo (isset($result_email))?$result_email:'';?>" required/>	
					</td>
				</tr>
				<tr>
					<td colspan="3" id='ord'>	
						<input id="place"type="submit" name="placeorder" value="Place order!!"/>	
					</td>
				</tr>
			</table>
		</form>	
	</center>
	</body>
</html>