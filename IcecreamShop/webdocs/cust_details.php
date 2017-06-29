<!DOCTYPE html>
<?php include"../sqlconnect.php";
?>
<html>
<head>
			<link rel="shortcut icon" type="image/x-icon" href="../Styles/Images/ice.png"/>

<link rel="stylesheet" href="../Styles/cust_details.css" type="text/css"/>
</head>
<body>
<?php
error_reporting(E_ALL);	
$cid=$_GET['cust_id'];
			echo "<div>";

	$c_details=mysqli_query($con,"select * from gxt76550_customers where CustomerID=$cid");
				while($row=mysqli_fetch_array($c_details))
				{
					$c_id=$row["CustomerID"];
					$c_fname=$row["FirstName"];
					$c_lname=$row["LastName"];
					$c_email=$row["EmailAddress"];
				echo "<p>Customer ID : <span>".$c_id."</span></p>
				<p>First Name : <span>".$c_fname."</span></p>
				<p>Last Name : <span>".$c_lname."</span></p>
				<p>Email Address : <span>".$c_email."</span></p>";					
				}
				echo "</div>";			
				
	?>
</body>
</html>