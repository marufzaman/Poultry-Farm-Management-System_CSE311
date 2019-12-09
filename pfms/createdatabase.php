<?php
	include_once 'header.php';
	include_once 'includes/database.php';
	include_once 'includes/config.php';
?>


<?php
$db = new Database();

if(isset($_POST['submit'])){
	$firstName = mysqli_real_escape_string($db->link, $_POST['First_Name']);
	$lastName = mysqli_real_escape_string($db->link, $_POST['Last_Name']);
	$gender = mysqli_real_escape_string($db->link, $_POST['Gender']);
	$dob = mysqli_real_escape_string($db->link, $_POST['DOB']);
	$job = mysqli_real_escape_string($db->link, $_POST['Job']);
	$salary = mysqli_real_escape_string($db->link, $_POST['Salary']);
	$joinDate = mysqli_real_escape_string($db->link, $_POST['Join_Date']);
	$addressId = mysqli_real_escape_string($db->link, $_POST['Address_ID']);
	$contactNo = mysqli_real_escape_string($db->link, $_POST['Contact_No']);
	$email = mysqli_real_escape_string($db->link, $_POST['Email']);

	if($lastName == ''|| $gender == ''|| $job == ''|| $salary == ''|| $joinDate ==''|| $addressId == ''|| $contactNo == ''){
		$error = "Field must not be empty!!";
	}else{
		$query = "INSERT INTO employees(First_name, Last_Name, Gender, DOB, Job, Salary, Join_Date, Address_ID, Contact_No, Email)
		VALUES('$firstName', '$lastName', '$gender', '$dob', '$job', '$salary', '$joinDate', '$addressId', '$contactNo', '$email')";
		$create = $db->insert($query);
	}
}

?>

<?php
if(isset($error)){
	echo "<span style='color:red'>".$error."</span>";
}
?>

<form action="createdatabase.php" method="POST">

<table class = "tblone">
	

	<tr>
		<td>First Name</td>
		<td><input type="text" name="First_Name" placeholder="Please enter First name"/></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text" name="Last_Name" placeholder="Please enter Last name"/></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td><input type="text" name="Gender" placeholder="Please enter Gender"/></td>
	</tr>
	<tr>
		<td>DOB</td>
		<td><input type="text" name="DOB" placeholder="Enter Like:: Y-M-D"/></td>
	</tr>
	<tr>
		<td>Job</td>
		<td><input type="text" name="Job" placeholder="Please enter Job"/></td>
	</tr>
	<tr>
		<td>Salary</td>
		<td><input type="text" name="Salary" placeholder="Please enter Salary"/></td>
	</tr>
	<tr>
		<td>Join Date</td>
		<td><input type="text" name="Join_Date" placeholder="Please enter Join Date"/></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" name="Address_ID" placeholder="Please enter Address"/></td>
	</tr>
	<tr>
		<td>Contact No</td>
		<td><input type="text" name="Contact_No" placeholder="Please enter Contact No"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="Email" placeholder="Please enter Email"/></td>
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
