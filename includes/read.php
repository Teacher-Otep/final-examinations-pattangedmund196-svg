<?php
include "db.php";

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

echo "<table border='1' width='100%'>";
echo "<tr>
        <th>ID</th>
        <th>Surname</th>
        <th>Name</th>
        <th>Middle</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Action</th>
      </tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['surname']."</td>
        <td>".$row['name']."</td>
        <td>".$row['middlename']."</td>
        <td>".$row['address']."</td>
        <td>".$row['contact']."</td>
        <td>
            <button onclick=\"editStudent(
                ".$row['id'].",
                '".$row['surname']."',
                '".$row['name']."',
                '".$row['middlename']."',
                '".$row['address']."',
                '".$row['contact']."'
            )\">Edit</button>
        </td>
    </tr>";
}

echo "</table>";
?>