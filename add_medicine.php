

<?php include("common/header.php");?>






<?php




if(isset($_POST['addmedicine']))
{
	$target_dir="pic/medicine/";
	$target_file = $target_dir . basename($_FILES["medicine_pic"]["name"]);
   if (move_uploaded_file($_FILES["medicine_pic"]["tmp_name"], $target_file)){


    $medicine_pic = $_FILES["medicine_pic"] ["name"];
    $medicine_name = $_POST['medicine_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description=$_POST['description'];



    $sql="insert into medicine (medicine_name,  medicine_price , medicine_pic,quantity,description) values ('$medicine_name','$price','$medicine_pic', '$quantity','$description' )";
    if($conn->query($sql)==true)
        echo "new Medicicne  is   added successfully";
    else
        echo $conn->error;

    
   }
   else {
    echo "Sorry, there was an error add medicine.";
  }




}


?>
















<div class="addmedicine">

                        	<form action="" method="post" enctype="multipart/form-data">


                        		<table align="center" width="400">
                        			<tr>
                        				<td><b>Medicine  Name:</b></td>
                        				
                        				<td> <input type="text" name="medicine_name" ></td>
                        					
                        				</td>
                        			</tr>
                        			<tr>
                        				<td><b>Medicine Pic:</b></td>
                        				<td><input type="file" name="medicine_pic" id="medicine_pic"></td>

                        			</tr>

                        			<tr>
                        				<td><b>Medicine Price:</b></td>
                        				<td><input type="text" name="price"></td>
                        			</tr>
                        			
                        			<tr>
                                        <td><b>Quantity:</b></td>
                                        <td><input type="text" name="quantity"></td>
                                    </tr>
                                    <tr>
                                        <td><b>description:</b></td>
                                        <td><input type="text" name="description"></td>
                                    </tr>



                        			<tr>

                        				<td><input  type="submit" name="addmedicine" value="Add"></td>
                        			</tr>
                        		</table>
                        	</form>








<?php include("common/footer.php");?>

