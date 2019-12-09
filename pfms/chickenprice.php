<?php
	include_once 'header.php';
	include_once 'includes/database.php';
	include_once 'includes/config.php';
?>

<?php
$db = new Database();
$query = "SELECT * FROM chickens";
$read = $db->select($query);
?>


<table class = "tblone">
<tr>
	<th width = "20%">Type</th>
	<th width = "20%">Price</th>
	<th width = "20%">Quantity</th>
	<th width = "20%">Action</th>
</tr>

<?php 
if($read){
?>
	<?php while($row = $read->fetch_assoc()){?>
	<tr>
		<td><?php echo $row['C_Types'];?></td>
		<td><?php echo $row['Price_Per_KG'];?></td>
		<td><?php echo $row['Current_Quantity'];?></td>
		<td><a href="cupdate.php?id=<?php echo urlencode($row['id']);?>">Edit</a></td>
	</tr>
<?php } ?>
<?php } else { ?>
<p>Data is not available !!</p>
<?php }?>
</table>


<?php
	include_once 'footer.php';
?>