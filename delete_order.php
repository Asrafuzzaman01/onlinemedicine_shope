<?php include("common/header.php");?>


<?php 
$id=$_REQUEST['id'];
$sql=  "delete from order_product where id=$id";


$conn->query($sql);


header('Location:all_order.php');
exit;

?>