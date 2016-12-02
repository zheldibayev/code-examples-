<?php
include('dbcon.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$conn->query("insert into members (firstname,lastname,middlename,sex,email,password) values('$firstname','$lastname','$middlename','$gender','$email','$password')");
?>