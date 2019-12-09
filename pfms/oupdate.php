<?php
	include_once 'header.php';
	include_once 'includes/database.php';
	include_once 'includes/config.php';
?>


<?php
$id = $_GET['id'];
$db = new Database();
$query = "SELECT * FROM owners WHERE id=$id";
$getData = $db->select($query)->fetch_assoc();

if(isset($_POST['submit'])){
	$firstName = mysqli_real_escape_string($db->link, $_POST['First_Name']);
	$lastName = mysqli_real_escape_string($db->link, $_POST['Last_Name']);
	$gender = mysqli_real_escape_string($db->link, $_POST['Gender']);
	$dob = mysqli_real_escape_string($db->link, $_POST['DOB']);
	$addressId = mysqli_real_escape_string($db->link, $_POST['Address_ID']);
	$contactNo = mysqli_real_escape_string($db->link, $_POST['Contact_No']);
	$email = mysqli_real_escape_string($db->link, $_POST['Email']);

	if($lastName == ''|| $gender == ''|| $addressId == ''|| $contactNo == ''){
		$error = "Field must not be empty!!";
	}else{
		$query = "UPDATE owners  
		SET 
		First_name = '$firstName', 
		Last_Name ='$lastName', 
		Gender ='$gender', 
		DOB ='$dob', 
		Address_ID ='$addressId', 
		Contact_No ='$contactNo', 
		Email = '$email'
		WHERE id = $id"; 
		// To update the query
		$update = $db->update($query);
	}
}?>

<?php
if(isset($_POST['delete'])){
	$query = "DELETE FROM owners WHERE id=$id";
	$deleteData = $db->delete($query);
}
?>

<?php
if(isset($error)){
	echo "<span style='color:red'>".$error."</span>";
}
?>

<form action="oupdate.php?id=<?php echo $id;?>" method="POST">

<table class = "tblone">
	

	<tr>
		<td>First Name</td>
		<td><input type="text" name="First_Name" value="<?php echo $getData['First_Name']?>"/></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text" name="Last_Name" value="<?php echo $getData['Last_Name']?>"/></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td><input type="text" name="Gender" value="<?php echo $getData['Gender']?>"/></td>
	</tr>
	<tr>
		<td>DOB</td>
		<td><input type="text" name="DOB" value="<?php echo $getData['DOB']?>"/></td>
	</tr>
		<td>Address</td>
		<td><input type="text" name="Address_ID" value="<?php echo $getData['Address_ID']?>"/></td>
	</tr>
	<tr>
		<td>Contact No</td>
		<td><input type="text" name="Contact_No" value="<?php echo $getData['Contact_No']?>"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="Email" value="<?php echo $getData['Email']?>"/></td>
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
<a href="ownerinfo.php">Go Back</a>

<?php include 'footer.php'; ?>
