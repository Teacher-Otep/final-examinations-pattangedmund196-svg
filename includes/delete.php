<?php
include "db.php";

if(isset($_POST['id'])){
    $id = $_POST['id'];

    $stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
    $stmt->execute([$id]);

    echo "Student deleted successfully!";
}
?>