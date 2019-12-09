<?php
	include_once 'header.php';
	include_once 'includes/database.php';
	include_once 'includes/config.php';
?>


<?php
$id = $_GET['id'];
$db = new Database();
$query = "SELECT * FROM chickens WHERE id=$id";
$getData = $db->select($query)->fetch_assoc();

if(isset($_POST['submit'])){
	$cTypes = mysqli_real_escape_string($db->link, $_POST['C_Types']);
	$pPerkg = mysqli_real_escape_string($db->link, $_POST['Price_Per_KG']);
	$cquantity = mysqli_real_escape_string($db->link, $_POST['Current_Quantity']);

	if($cTypes == ''|| $pPerkg == ''|| $cquantity == ''){
		$error = "Field must not be empty!!";
	}else{
		$query = "UPDATE chickens  
		SET 
		C_Types = '$cTypes', 
		Price_Per_KG ='$pPerkg', 
		Current_Quantity ='$cquantity', 
		WHERE id = $id"; 
		// To update the query
		$update = $db->update($query);
	}
}?>

<?php
if(isset($_POST['delete'])){
	$query = "DELETE FROM chickens WHERE id=$id";
	$deleteData = $db->delete($query);
}
?>

<?php
if(isset($error)){
	echo "<span style='color:red'>".$error."</span>";
}
?>

<form action="cupdate.php?id=<?php echo $id; ?>" method="POST">

<table class = "tblone">
	

	<tr>
		<td>Type</td>
		<td><input type="text" name="C_Types" value="<?php echo $getData['C_Types']?>"/></td>
	</tr>
	<tr>
		<td>Price Per KG</td>
		<td><input type="text" name="Price_Per_KG" value="<?php echo $getData['Price_Per_KG']?>"/></td>
	</tr>
	<tr>
		<td>Current Quantity</td>
		<td><input type="text" name="Current_Quantity" value="<?php echo $getData['Current_Quantity']?>"/></td>
	</tr>

	<tr>
		<td></td>
		<td>
			<input type="submit" name="submit" value="Update"/>
			<input type="reset" value="Cancel"/>
			<input type="submit" name="delete" value="Delete"/>
		</td>
	</tr>


</table>
</form>
<a href="chickenprice.php">Go Back</a>

<?php include 'footer.php'; ?>
