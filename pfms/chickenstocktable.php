<?php
	include_once 'header.php';
	include_once 'includes/database.php';
	include_once 'includes/config.php';
?>

<?php
$db = new Database();
$query = "SELECT c.C_Types, c.Price_Per_KG, c.Current_Quantity, e.Price_Per_Dozen, e.Current_Quantity FROM chickens c JOIN eggs e ON c.id=e.id";
$read = $db->select($query);
?>


<table class = "tblone">
<tr>
	<th width = "20%">Chicken Type</th>
	<th width = "20%">Chicken Price Per KG</th>
	<th width = "20%">Current Stock</th>
	<th width = "20%">Egg Price Per Dozen</th>
	<th width = "20%">Egg Stock</th>
</tr>

<?php 
if($read){?>
	<?php while($row = $read->fetch_assoc()){?>

	<tr>
		<td><?php echo $row['C_Types'];?></td>
		<td><?php echo $row['Price_Per_KG'];?></td>
		<td><?php echo $row['Current_Quantity'];?></td>
		<td><?php echo $row['Price_Per_Dozen'];?></td>
		<td><?php echo $row['Current_Quantity'];?></td>
	</tr>
<?php } ?>
<?php } else { ?>
<p>Data is not available !!</p>
<?php }?>
</table>


<?php
	include_once 'footer.php';
?>

