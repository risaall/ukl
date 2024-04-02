<?php
// include database connection file
include_once('../connect.php');

// get id from url to delete that user
$id=$_GET['id'];

// delete user row from table based on gived id
$result=mysqli_query($mysqli,"DELETE FROM login WHERE id=$id");

// after delete redirect to Home, so that latest user list will be displayed

header("location:admin\adminlogin.php")