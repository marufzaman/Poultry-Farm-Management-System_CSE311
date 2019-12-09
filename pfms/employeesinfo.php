<?php
	include_once 'header.php';
	include_once 'includes/database.php';
	include_once 'includes/config.php';
?>

<?php
$db = new Database();
$query = "SELECT * FROM employees";
$read = $db->select($query);
?>

<?php
if(isset($_GET['msg'])){
	echo "<span style='color:green'>".$_GET['msg']."</span>";
}
?>

<table class = "tblone">
<tr>
	<th width = "5%">Employee ID</th>
	<th width = "10%">First Name</th>
	<th width = "10%">Last Name</th>
	<th width = "5%">Gender</th>
	<th width = "10%">DOB</th>
	<th width = "10%">Job</th>
	<th width = "5%">Salary</th>
	<th width = "10%">Join Date</th>
	<th width = "5">AddressID</th>
	<th width = "10%">Contact No</th>
	<th width = "10%">Email</th>
	<th width = "5%">Action</th>

</tr>

<?php 
if($read){?>
	<?php while($row = $read->fetch_assoc()){?>

	<tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['First_Name'];?></td>
		<td><?php echo $row['Last_Name'];?></td>
		<td><?php echo $row['Gender'];?></td>
		<td><?php echo $row['DOB'];?></td>
		<td><?php echo $row['Job'];?></td>
		<td><?php echo $row['Salary'];?></td>
		<td><?php echo $row['Join_Date'];?></td>
		<td><?php echo $row['Address_ID'];?></td>
		<td><?php echo $row['Contact_No'];?></td>
		<td><?php echo $row['Email'];?></td>
		<td><a href="update.php?id=<?php echo urlencode($row['id']);?>">Edit</a></td>
	</tr>
<?php } ?>
<?php } else { ?>
<p>Data is not available !!</p>
<?php }?>
</table>
<a href="createdatabase.php">Create</a>

<?php
	include_once 'footer.php';
?>