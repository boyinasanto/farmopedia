 <?php
if(count($_POST)>0) {
	require_once("db.php");
	$sql = "INSERT INTO data (first1,last1,uid1,pwd1) VALUES ('" . $_POST["first1"] . "','" . $_POST["last1"] . "','" . $_POST["uid1"] . "','" . $_POST["pwd1"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New User Added Successfully";
	}
}
?>

<!DOCTYPE html>
<html>
<style>
form {

width:300px;
margin:auto;
padding:50px;

}

input[type=text], input[type=text] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=email] ,input[type=password]{
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }

button {
    background-color: #4CAF50;
    color: white;
    padding: 7px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;

}

button:hover {
    opacity: 0.8;
}

.container {
width:220px;
    padding:20px;
background:rgba(0,0,0,.5);
position:relative;

}
h1
{
text-align:center;
}


body
{
font-family: arial;
background-image:url("Sunset-Rainbow.jpg");
background-size: 100%;
background-position:fit;
background-repeat:no-repeat;")
}

</style>
<body>
<h1>Registration Form</h1>

<form action="" method="POST">


  <div class="container">
  <label><b>FirstName :</b></label>
      <input type="text" placeholder="Firstname" name="first1" required>
    <label><b>LastName :</b></label>
    <input type="" placeholder="Lastname" name="last1" required>
  <label><b>userName :</b></label>
    <input type="email" placeholder="email" name="uid1" required>
  <label><b>Password :</b></label>
    <input type="password" placeholder="8-Digit Password" name="pwd1" required>



    <button type="submit" >SIGN UP</button>




 </div>
</form>

</body>
</html>