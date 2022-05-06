<?php include("common/header.php"); ?>








<?php

$id = $_REQUEST['id'];
$sql = "delete from registration_form where id=$id";


$conn->query($sql);


header('Location:all_user.php');
exit;

?>
