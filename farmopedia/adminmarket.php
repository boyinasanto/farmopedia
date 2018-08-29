<?php

include 'db.php';

$states = $_POST['states'];
$district = $_POST['district'];
$area = $_POST['area'];
$marketname = $_POST['marketname'];

$sql ="INSERT INTO market (states,district,area,marketname)
values('$states','$district','$area','$marketname')";
$result = mysqli_query($conn, $sql);


header("Location: adminhome.php");
?>
