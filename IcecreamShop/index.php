<!DOCTYPE html>

<html>
	<head>
				<link rel="shortcut icon" type="image/x-icon" href="Styles/Images/ice.png"/>

		<title>Tondapu's Icecream Shop</title>
		<link rel="stylesheet" href="Styles/_style.css" type="text/css"/>
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
		<script src="Scripts/_script.js" type="text/javascript">

		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	</head>
	
	<body>
		<h1 id="hhh">Tondapu's Icecream Shop</h1>
		<ul>
		  <li><a class="active" href="index.php">Home</a></li>
		  <li><a href="webdocs/all_orders.php">All Orders</a></li>
		  <li><a href="webdocs/report.php">Report</a></li>
		  <li><a href="webdocs/about.php">About</a></li>
		</ul>
		<div id="main">
			<p>Select a product...</p>	
			<a href="#sub" onclick="javascript:icecream_click();" id="icecream" onmouseover="blur_ice()" onmouseout="clear_all()">
				Icecream
			</a>
			<a href="#sub" onclick="javascript:milkshake_click();" id="milkshake" onmouseover="blur_milk()" onmouseout="clear_all()">
				Milkshake
			</a>
			<a href="#sub" onclick="javascript:floats_click();" id="floats" onmouseover="blur_float()" onmouseout="clear_all()">
				Floats
			</a>
		</div>
		<div id="sub" style = "display:none">
			<p>Select scoops of your choice..</a><p>
			<a href="#vessel" onclick="javascript:chocolate_click();" id="chocolate" onmouseover="blur_chocolate()" onmouseout="clear_all()">
				Chocolate
				<input type="checkbox" class="checkbox" id="check1" style="transform: scale(2);" value="Chocolate" />
			</a>
			<a href="#vessel" onclick="javascript:butterscotch_click();" id="butterscotch" onmouseover="blur_butterscotch()" onmouseout="clear_all()">
				Butterscotch
								<input type="checkbox" class="checkbox" id="check1" style="transform: scale(2);" value="Butterscotch"/>

			</a>
			<a href="#vessel" onclick="javascript:blackcurrant_click();" id="blackcurrant" onmouseover="blur_blackcurrant()" onmouseout="clear_all()">
				Blackcurrant
								<input type="checkbox" class="checkbox" id="check1" style="transform: scale(2);" value="Blackcurrant"/>

			</a>
			<a href="#vessel" onclick="javascript:pista_click();" id="pista" onmouseover="blur_pista()" onmouseout="clear_all()">
				Pista
								<input type="checkbox" class="checkbox" id="check1" style="transform: scale(2);" value="Pista" />

			</a>
			<a href="#vessel" onclick="javascript:pineapple_click();" id="pineapple" onmouseover="blur_pineapple()" onmouseout="clear_all()">
				Pineapple
								<input type="checkbox" class="checkbox" id="check1" style="transform: scale(2);"  value="Pineapple"/>

			</a>
			<a href="#vessel" onclick="javascript:vanilla_click();" id="vanilla" onmouseover="blur_vanilla()" onmouseout="clear_all()">
				Vanilla
								<input type="checkbox" class="checkbox" id="check1" style="transform: scale(2);"  value="Vanilla"/>

			</a>
			<a href="#vessel" onclick="javascript:strawberry_click();" id="strawberry" onmouseover="blur_strawberry()" onmouseout="clear_all()">
				Strawberry
								<input type="checkbox" class="checkbox" id="check1" style="transform: scale(2);"  value="Strawberry"/>

			</a>
		</div>
		
		<div id="vessel" style = "display:none">
			<p>Select a vessel</p>	
			<a href="#placeorder" onclick="javascript:cone_click();" id="cone" onmouseover="blur_cone()" onmouseout="clear_all()">
				Cone
			</a>
			<a href="#placeorder" onclick="javascript:cup_click();" id="cup" onmouseover="blur_cup()" onmouseout="clear_all()">
				Cup
			</a>
			<a href="#placeorder" onclick="javascript:glass_click();" id="glass" onmouseover="blur_glass()" onmouseout="clear_all()">
				Glass
			</a>
		</div>	
		<div id="milktype" style = "display:none">
			<p>Select milk type...</p>	
			<a href="#placeorder" onclick="javascript:skimmed_click();" id="skimmed" onmouseover="blur_skimmed()" onmouseout="clear_all()">
				Skimmed
			</a>
			<a href="#placeorder" onclick="javascript:whole_click();" id="whole" onmouseover="blur_whole()" onmouseout="clear_all()">
				whole
			</a>
			<a href="#placeorder" onclick="javascript:percent_click();" id="percent" onmouseover="blur_percent()" onmouseout="clear_all()">
				2%
			</a>
		</div>	
		<div id="sodatype" style = "display:none">
			<p>Select soda...</p>	
			<a href="#placeorder" onclick="javascript:fanta_click();" id="fanta" onmouseover="blur_fanta()" onmouseout="clear_all()">
				Fanta
			</a>
			<a href="#placeorder" onclick="javascript:pepsi_click();" id="pepsi" onmouseover="blur_pepsi()" onmouseout="clear_all()">
				Pepsi
			</a>
			<a href="#placeorder" onclick="javascript:cola_click();" id="cola" onmouseover="blur_cola()" onmouseout="clear_all()">
				CocaCola
			</a>
		</div>	
		<div id="placeorder" style ="display:none">
		<p></p>
			<a href="#"  id="order" onclick="javascript:place_order();" onmouseover="blur_cone()" onmouseout="clear_all()">
				<img src="Styles/Images/ordernow.png" width="450" alt="Place order!!"/>
			</a>
		</div>
	</body>
</html>


