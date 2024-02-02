<?php 

$title = "Exercise 3";
include 'header.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
echo "<h3>Hello $firstname $lastname, You are welcome to my site.</h3>";

include 'footer.php'; ?>