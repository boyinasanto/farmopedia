<?php

include 'db.php';

$soilname = $_POST['soilname'];
$description = $_POST['description'];


$sql ="INSERT INTO soil (soilname,description)
values('$soilname','$description')";
$result = mysqli_query($conn, $sql);


header("Location:adminhome.php");

?>
