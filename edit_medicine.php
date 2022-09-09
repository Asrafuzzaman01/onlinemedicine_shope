<?php include("common/header.php");?>

<?php
$id=$_REQUEST['id'];

      
        ?>

        <?php


if(isset($_POST['updatemedicine']))
{
	$target_dir="pic/medicine/";
	$target_file = $target_dir . basename($_FILES["medicine_pic"]["name"]);
   if (move_uploaded_file($_FILES["medicine_pic"]["tmp_name"], $target_file)){


    $medicine_pic = $_FILES["medicine_pic"] ["name"];
    $medicine_name = $_POST['medicine_name'];
    $medicine_price = $_POST['medicine_price'];
    $quantity = $_POST['quantity'];
    $description=$_POST['description'];


 
              $sql="update medicine set medicine_name='$medicine_name',medicine_price='$medicine_price', medicine_pic='$medicine_pic', quantity='$quantity',description='$description' where medicine_id=$id";

                 






    if($conn->query($sql)==true)
        echo "updated Medicicne";
    else
        echo $conn->error;

    
   }
   else {
    echo "Sorry, there was an error update medicine.";
  }

}


$sql="SELECT * from medicine where medicine_id =".$id;


$result  =  $conn->query($sql);
$row     =  $result->fetch_assoc();



?>
















<div class="addmedicine">

                        	<form action="" method="post" enctype="multipart/form-data">


                        		<table align="center" width="400">
                        			<tr>
                        				<td><b>Medicine  Name:</b></td>
                        				
                        				<td> <input type="text" name="medicine_name"  value="<?php echo $row['medicine_name']?>" ></td>
                        					
                        				</td>
                        			</tr>
                        			<tr>
                        				<td><b>Medicine Pic:</b></td>
                        				<td>
                        					<input type="file" name="medicine_pic" id="medicine_pic">

                        					<img src='pic/medicine/<?php echo $row['medicine_pic'];?>' width="80" height="100" >

                        				</td>

                        			</tr>

                        			<tr>
                        				<td><b>Medicine Price:</b></td>
                        <td><input type="text" name="medicine_price" value="<?php echo $row['medicine_price']?>" ></td>
                        			</tr>
                        			
                      <tr>
                           <td><b>Quantity:</b></td>
                           <td><input type="text" name="quantity" value="<?php echo $row['quantity']?>" ></td>
                    </tr>

                      <td><b> Description</b></td>
                      <td><input type="tex" name="description" value="<?php echo $row['description']?>"></td>

                    <tr>

                                    	

                         </tr>


                        			<tr>

                        				<td><input  type="submit" name="updatemedicine" value="update"></td>
                        			</tr>
                        		</table>
                        	</form>








<?php include("common/footer.php");?>






































