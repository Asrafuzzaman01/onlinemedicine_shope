<?php include("common/header.php");?>





  <div class="med_display">

<div class="container">
		

	<?php 
	$sql= "select medicine.* from medicine ";
	$result=$conn->query($sql);
	if($result->num_rows>0){
           
		while($row=$result->fetch_assoc()){


			?>



			<div class="col-sm-3">
			     <img src='pic/medicine/<?php echo $row['medicine_pic'];?>' width="180" height="180" ></br>

				 <h5> medicine  name:  <?php echo $row['medicine_name'];?></h5></br>
				  <h5>Price:<?php echo $row['medicine_price'];?></h5></br>
				<button > <a href="order.php">order now</a></button>

			</div>




	<?php	}


		

	}


	?>
</div>


</div>




<?php include("common/footer.php");?>