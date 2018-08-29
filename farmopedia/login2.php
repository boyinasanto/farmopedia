<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "SELECT * FROM data where uid1='" . $_POST["uid1"] . "' AND pwd1='" . $_POST["pwd1"] . "'";
	$result = mysqli_query($conn,$sql);
	$rowcount = mysqli_num_rows($result);
	if($rowcount == 1)
	{
		header("Location:adminhome.php");
	}
	else
	{
		echo "<h2>Invalid Credentials</h2>";
	}
}
?>

<!DOCTYPE html>
<html>
<style>
form {

width:300px;
margin:auto;

padding:100px;

}

input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding:10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;

}

button:hover {
    opacity: 0.8;
}



.registration {
    width: 100px;
    border: 1px solid black;
    padding: 5px;
    margin: 1px;
    background-color: #4CAF50;
    color:white;
    text-align:center;
    text-decoration:none;
    }
.container {
    padding: 30px;
background-color:white;
position:relative;
width:250px;


}
body
{

background-image:url("Sunset-Rainbow.jpg");
background-size: 100%;
background-position:fit;
background-repeat:no-repeat;
background-attachment: fixed;
}




.psw {
    float:right;
    padding-top:0px;
    border: 1px solid #ccc;

}


</style>
<body>


<form action="" method="post">


  <div class="container">
    <label><b>Username</b></label>
    <input type="email" placeholder="email" name="uid1" required>

    <label><b>Password</b></label>
    <input type="password" placeholder=" Password" name="pwd1" required>

    <button type="submit">Login</button>


 <div class="psw"> <a href="forgotpassword2.php">forgot password?</a></div>
  </div>
<div class="container">


</form>

</body>
</html>
