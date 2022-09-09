<?php include("common/header.php");?>


<?php 
$medicine_id=$_REQUEST['id'];
$sql="delete from medicine where medicine_id=$id";


$conn->query($sql);


header('Location:all_medicine.php');
exit;

?>