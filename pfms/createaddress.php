<?php
	include_once 'header.php';
	include_once 'includes/database.php';
	include_once 'includes/config.php';
?>


<?php
$db = new Database();

if(isset($_POST['submit'])){
	$haddress = mysqli_real_escape_string($db->link, $_POST['Home_Address']);
	$pcode = mysqli_real_escape_string($db->link, $_POST['Postal_Code']);
	$city = mysqli_real_escape_string($db->link, $_POST['City']);


	if($haddress == ''||$city == ''){
		$error = "Field must not be empty!!";
	}else{
		$query = "INSERT INTO address(Home_Address, Postal_Code, City)
		VALUES('$haddress', '$pcode', '$city')";
		$create = $db->insert($query);
	}
}

?>

<?php
if(isset($error)){
	echo "<span style='color:red'>".$error."</span>";
}
?>

<form action="createaddress.php" method="POST">

<table class = "tblone">
	

	<tr>
		<td>Home Address</td>
		<td><input type="text" name="Home_Address" placeholder="Please enter Home Address"/></td>
	</tr>
	<tr>
		<td>Postal Code</td>
		<td><input type="text" name="Postal_Code" placeholder="Please enter Postal Code"/></td>
	</tr>
	<tr>
		<td>City</td>
		<td><input type="text" name="City" placeholder="Please enter City Name"/></td>
	</tr>
	
	<tr>
		<td></td>
		<td>
			<input type="submit" name="submit" value="Submit"/>
			<input type="reset" name="submit" value="Cancel"/>
		</td>
	</tr>


</table>
</form>
<a href="employeesinfo.php">Go Back</a>

<?php include 'footer.php'; ?>
