
<?php
$conn = mysqli_connect('localhost','root','','logintest3');
$sql = "DELETE FROM soil WHERE id='$_GET[id]'";
if(mysqli_query($conn, $sql))
header("Location: adminhome.php");
else
echo "NOT Deleted";
?>