<?php
	include_once 'header.php';
	include_once 'includes/database.php';
	include_once 'includes/config.php';
?>

<?php
$db = new Database();
$query = "SELECT * FROM feed_for_sale ";
$read = $db->select($query);
?>


<table class = "tblone">
<tr>
	<th width = "60">Feed Name</th>
	<th width = "20%">Feed Price Per KG</th>
	<th width = "20%">Current Stock</th>
	

</tr>

<?php 
if($read){?>
	<?php while($row = $read->fetch_assoc()){?>

	<tr>
		<td><?php echo $row['feed_name'];?></td>
		<td><?php echo $row['feed_price_per_kg'];?></td>
		<td><?php echo $row['stock'];?></td>
		
	</tr>
<?php } ?>
<?php } else { ?>
<p>Data is not available !!</p>
<?php }?>
</table>


<?php
	include_once 'footer.php';
?>

