<?php
	include_once 'header.php';
	include_once 'includes/database.php';
	include_once 'includes/config.php';
?>

<?php
$db = new Database();
$query = "SELECT * FROM owners";
$read = $db->select($query);
?>

<?php
if(isset($_GET['msg'])){
	echo "<span style='color:green'>".$_GET['msg']."</span>";
}
?>

<table class = "tblone">
<tr>
	<th width = "10%">Owner ID</th>
	<th width = "10%">First Name</th>
	<th width = "10%">Last Name</th>
	<th width = "10%">Gender</th>
	<th width = "10%">DOB</th>
	<th width = "10%">Address</th>
	<th width = "10%">Contact No</th>
	<th width = "10%">Email</th>
	<th width = "10%">Password</th>
	<th width = "10%">Action</th>

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
		<td><?php echo $row['Address_ID'];?></td>
		<td><?php echo $row['Contact_No'];?></td>
		<td><?php echo $row['Email'];?></td>
		<td><?php echo $row['Password'];?></td>
		<td><a href="oupdate.php?id=<?php echo $row['id'];?>">Edit</a></td>
	</tr>
<?php } ?>
<?php } else { ?>
<p>Data is not available !!</p>
<?php }?>
</table>


<?php
	include_once 'footer.php';
?>