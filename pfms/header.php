<?php
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Full Heart Farm</title>
	<link type="text/css" rel = "stylesheet" href = "HomeStyle.css">
</head>
<body>
<header>
<a href="index.php"> <img src = "LOGO.png" height="100px"> </a>
<div id="button">
	<?php
		if(isset($_SESSION['u_id'])){
			echo '<ul>
			 	<li> <a href="index.php"> Home </a> </li>
			 		<li> <a href="#"> Current Price</a>
			 			<ul>
			 				<li> <a href="chickenprice.php">Chickens Price</a></li>
			 				<li> <a href="eggprice.php">Eggs Price</a></li>
			 				<li> <a href="feedstock.php">Feed Price</a></li>
			 			</ul>
			 		</li>

			 	<li><a href="#">Admin Panel</a> 
			 	<ul>
			 	<li> <a href="employeesinfo.php">Employees Info</a></li>
			 	<li> <a href="ownerinfo.php">Owners Info</a></li>
			 	<li> <a href="feedstock.php">Feed Info</a></li>
			 	</ul>
			 	</li>
			 		<li> <a href="#">Database</a> 
						<ul>
	 					<li><a href="createdatabase.php">Create EmployeeInfo </a> </li>
	 					<li><a href="createaddress.php">Insert Address</a> </li>
	 		    		</ul>
	 		    	</li>
	 		    	<form action="includes/logout.inc.php" method="POST">
			 		<li> <button type="submit" name="submit">Logout</button></li>
			 		</form>
			 	</ul>';
		}else{
			echo '<ul>
	 	<li> <a href="index.php"> Home </a> </li>
	 		<li> <a href="#"> Services </a>
	 			<ul>
	 			<li><a href="chickenstocktable.php">Chicken Stock </a> </li>
	 			<li><a href="feedstock.php">Feed Stock </a> </li>
	 		    </ul>
	 		</li>
	 		<li> <a href="aboutus.php"> About Us</a> </li>
	 		<li> <a href="contactus.php"> Contact Us</a> </li>
	 			<li> <a href="#"> Login </a>
	 		<ul>
	 			<li><a href="employee.php">Employee Login </a> </li>
	 			<li><a href="admin.php">Admin Login </a> </li>
	 		</ul>
	 	</li>
 	</ul>';
 			}
	?>
 	<div class="clear"></div>
 	<br>
 	<br>
 	<br>
 	<br>
 	<br>
 	<br>
 	<br>
</header>
