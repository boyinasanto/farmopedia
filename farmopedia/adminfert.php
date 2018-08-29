<?php

include 'db.php';

$soilname = $_POST['soilname'];
$cropname = $_POST['cropname'];
$nitrogen = $_POST['nitrogen'];
$phosphorus = $_POST['phosphorus'];
$quantity = $_POST['quantity'];
$cost = $_POST['cost'];

$sql ="INSERT INTO fert (soilname,cropname,nitrogen,phosphorus,quantity,cost)
values('$soilname','$cropname','$nitrogen','$phosphorus','$quantity','$cost')";
$result = mysqli_query($conn, $sql);


header("Location: adminhome.php");
?>
