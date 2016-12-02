<?php include('dbcon.php'); ?>
<?php
$id = $_POST['id'];
$product_name = $_POST['product_name'];
$number_payment = $_POST['number_payment'];
$client = $_POST['client'];
$date = $_POST['date'];
$average= $_POST['average'];
$comment = $_POST['comment'];





$conn->query("update sales set product_name = '$product_name' , number_payment = '$number_payment' , client = '$client' ,date = '$date',average = '$average',comment = '$comment' where id = '$id' ");

echo $product_name;

header('location:home.php');
?>