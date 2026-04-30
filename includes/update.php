<?php
include "db.php";

$id = $_POST['id'];
$surname = $_POST['surname'];
$name = $_POST['name'];
$middlename = $_POST['middlename'];
$address = $_POST['address'];
$contact = $_POST['contact'];

$sql = "UPDATE students SET 
surname='$surname',
name='$name',
middlename='$middlename',
address='$address',
contact='$contact'
WHERE id='$id'";

if(mysqli_query($conn, $sql)){
    echo "success";
} else {
    echo "error";
}
?>