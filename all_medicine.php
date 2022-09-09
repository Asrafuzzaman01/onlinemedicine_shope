<?php include("common/header.php");?>





  <div class="med_display">

<table id="all_medicine_dispaly">
		

	<?php 
	$sql= "select medicine.* from medicine ";
	$result=$conn->query($sql);
	if($result->num_rows>0){

		while($row=$result->fetch_assoc()){
			?>



			<tr>
				<td><?php echo $row['medicine_name'];?></td><br>
				<td><?php echo $row['medicine_price'];?></td>
				<td><?php echo  $row['quantity'];?></td>
				
				
				
	


			<td><img src='pic/medicine/<?php echo $row['medicine_pic'];?>' width="80" height="100" ></td>

              <td><a href="edit_medicine.php?id=<?php echo $row['medicine_id'];?>"> Edit medicine</a>||</td>

                <td><a href="delete_medicine.php?id=<?php echo $row['medicine_id'];?>">delete medicine</a></td>


			</tr>




	<?php	}


		

	}


	?>
</table>


</div>




<?php include("common/footer.php");?>