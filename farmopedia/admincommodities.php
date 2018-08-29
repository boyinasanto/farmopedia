<?php

include 'db.php';

$states = $_POST['states'];
$district = $_POST['district'];
$area = $_POST['area'];
$marketname = $_POST['marketname'];
$potato_cost = $_POST['potato_cost'];
$onion_cost = $_POST['onion_cost'];
$tomato_cost = $_POST['tomato_cost'];
$brinjal_cost = $_POST['brinjal_cost'];
$carrot_cost = $_POST['carrot_cost'];
$capsicum_cost = $_POST['capsicum_cost'];
$cucumber_cost = $_POST['cucumber_cost'];
$beetroot_cost = $_POST['beetroot_cost'];
$drumsticks_cost = $_POST['drumsticks_cost'];


$sql ="INSERT INTO commodities (states,district,area,marketname,potato_cost,onion_cost,tomato_cost,brinjal_cost,carrot_cost,capsicum_cost,cucumber_cost,beetroot_cost,drumsticks_cost)
values('$states','$district','$area','$marketname','$potato_cost','$onion_cost','$tomato_cost','$brinjal_cost','$carrot_cost','$capsicum_cost','$cucumber_cost','$beetroot_cost','$drumsticks_cost')";
$result = mysqli_query($conn, $sql);


header("Location: adminhome.php");
?>
