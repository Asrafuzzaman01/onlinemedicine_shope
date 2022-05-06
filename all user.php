<?php include("common/header.php"); ?>





<table>
		

	<?php
$sql = "select registration_form .* from registration_form ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

	while ($row = $result->fetch_assoc()) {
?>
			<tr>
				<td><?php echo $row['first_name']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
				<td><?php echo $row['user_name']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['phone']; ?></td>


               <td><?php echo $row['password']; ?></td>


               <td><?php echo $row['gender']; ?></td>






				
                <td><a href="edit_registration.php?id=<?php echo $row['id']; ?>"> Edit order</a>||</td>

                <td><a href="delete_registration.php?id=<?php echo $row['id']; ?>">delete order</a></td>


			</tr>




	<?php
	}




}


?>
</table>





















<?Php include("common/footer.php"); ?>