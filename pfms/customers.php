<?php
	include_once 'header.php';
	include_once 'includes/database.php';
	include_once 'includes/config.php';
?>

<?php
$db = new Database();
$query = "SELECT * FROM customers";
$read = $db->select($query);
?>


<table class = "tblone">
<tr>
	<th width = "20%">Customer ID</th>
	<th width = "20%">First Name</th>
	<th width = "20%">Last Name</th>
	<th width = "20%">Address ID</th>
	<th width = "20%">Contact No</th>
	<th width = "20%">Email</th>

</tr>

<?php 
if($read){?>
	<?php while($row = $read->fetch_assoc()){?>

	<tr>
		<td><?php echo $row['C_ID'];?></td>
		<td><?php echo $row['First_Name'];?></td>
		<td><?php echo $row['Last_Name'];?></td>
		<td><?php echo $row['Address_ID'];?></td>
		<td><?php echo $row['Contact_No'];?></td>
		<td><?php echo $row['Email'];?></td>
		<td><a href="update.php?id=<?php echo $row['ID'];?>">Edit</a></td>
	</tr>
<?php } ?>
<?php } else { ?>
<p>Data is not available !!</p>
<?php }?>
</table>


<?php
	include_once 'footer.php';
?>