<?php include("common/header.php");?>

<table>
		

	<?php 
	$sql= "select order_product .* from order_product ";
	$result=$conn->query($sql);
	if($result->num_rows>0){

		while($row=$result->fetch_assoc()){
			?>
			<tr>
				<td><?php echo $row['Name'];?></td>
				<td><?php echo $row['Phone'];?></td>
				<td><?php echo  $row['Email'];?></td>
				<td><?php echo  $row['address'];?></td>
				<td><?php echo  $row['message'];?></td>




				<td><img src='pic/prescription/<?php echo $row['prescription'];?>' width="80" height="100" ></td>\
                <td><a href="edit_order.php?id=<?php echo $row['id'];?>"> Edit order</a>||</td>

                <td><a href="delete_order.php?id=<?php echo $row['id'];?>">delete order</a></td>


			</tr>




	<?php	}


		

	}


	?>
</table>





<?php include("common/footer.php");?>