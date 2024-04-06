<?php 
include("connection.php");
 ?>
<table class="table">
			<thead>
				<th>Name</th>
				<th>Lastname</th>
				<th>Contact</th>
				<th>Address</th>
			</thead>
<?php 
	$query = mysqli_query($db, "SELECT * FROM tbl_info");
	while($row = mysqli_fetch_array($query)){

		$name = $row['name'];
		$lastname = $row['lastname'];
		$contact = $row['contact'];
		$address = $row['address'];
 ?>
			<tbody>
				<tr>
					<td><?php echo $name; ?></td>
					<td><?php echo $lastname; ?></td>
					<td><?php echo $contact; ?></td>
					<td><?php echo $address; ?></td>
				</tr>
			</tbody>
<?php 	} ?>
		</table>