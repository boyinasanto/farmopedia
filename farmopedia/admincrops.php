<?php

include 'db.php';
$soilname = $_POST['soilname'];
$cropname = $_POST['cropname'];


$sql ="INSERT INTO crop (soilname,cropname)
values('$soilname','$cropname')";
$result = mysqli_query($conn, $sql);


header("Location: adminhome.php");
?>
