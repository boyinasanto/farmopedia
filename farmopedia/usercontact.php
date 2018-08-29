<?php

include 'db.php';

$email = $_POST['email'];
$query = $_POST['query'];

$sql ="INSERT INTO usercontact (email,query)
values('$email','$query')";
$result = mysqli_query($conn, $sql);


header("Location: userhome.html");
?>
