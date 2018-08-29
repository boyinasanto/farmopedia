<?php
$conn = mysqli_connect('localhost','root','','logintest3');

$query = "SELECT * FROM `market`";
$result1 = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query);
$result3 = mysqli_query($conn, $query);
$result4 = mysqli_query($conn, $query);
$result5 = mysqli_query($conn, $query);

$options1 = "";
$options2 = "";
$options3 = "";
$options4 = "";

while($row2 = mysqli_fetch_array($result1))
{
    $options1 = $options1."<option>$row2[1]</option>";
}
while($row2 = mysqli_fetch_array($result2))
{
    $options2 = $options2."<option>$row2[2]</option>";
}

while($row2 = mysqli_fetch_array($result3))
{
    $options3 = $options3."<option>$row2[3]</option>";
}
while($row2 = mysqli_fetch_array($result4))
{
    $options4 = $options4."<option>$row2[4]</option>";
}

?>



<!DOCTYPE html>
<html>
<style>
ul
	{
	list-style-type:none;
	padding:10px;
	width:150px;
	position:absolute;
	top:10%;
	}




	li1 a
	{
	border:1px solid black;
	border-width:1px;
	display:block;
	color:white;
	font-size:20px;
	padding:20px;
	text-align:center;
	text-decoration:none;
	}
li1 a.active {
    background-color: #4CAF50;
    color: white;
}

li1 a:hover:not(.active) {
    background-color:green;
    color: white;
}

   body {
     margin: 0;
     padding :0;
     background : url(A.jpg);
     background-size:100%;
     font-family:sans-serif;
   }


   h2{
     margin : 0;
     padding: 0 0 20px;
     color : #efed40;
     text-align : center;
   }
   form {

   width:300px;
   margin:auto;

   padding:150px;
position:relative;
right:5%;
top:20%;
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

.container {
    padding:35px;
    background:rgba(0,0,0,.25);
    width:100%;

color:white;
  position:center;

    }


input[type=text], input[type=text] input[type = text] {
    width: 100%;
    padding: 8px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}





body
{
background-image: url("Sunset-Rainbow.jpg");
background-position:center;
background-repeat:no-repeat;
background-attachment:fixed;

}


table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    align : center;
}
th, td {
    padding: 2.5px;
}
th {
    text-align: left;
}
</style>
<body>
<form>
<div class="container">
  <label><b>State</b></label>
  <select name="states">
  <?php
  echo $options1;
  ?>
 </select><br><br>


<label><b>District</b></label>
<select name="district">
  <?php
  echo $options2;
  ?>
 </select><br><br>

<label><b>Area</b></label>
    <select name="area" >
	  <?php
	  echo $options3;
	  ?>
 </select><br><br>

<label><b>Market Name</b></label>
    <select name="marketname">
	  <?php
	  echo $options4;
	  ?>
 </select><br><br>


<button type="submit"><a href="usermarketsubmit.php">Submit</button></a>


</div>
</form>
<ul>
<li1><a href="userhome.html">Home</a><li1>
<li1><a href="usersoilsubmit.php">Soil</a></li1>
<li1><a href="userfertilizer.php">Fertilizers</a></li1>
<li1><a href="usermarket.php">Market</a></li1>
<li1><a href="reports.html">Reports</a></li1>
<li1><a href="contact.html">Contact us</a></li1>
<li1><a href="logout.php">Logout</a></li1>

</ul>
</body>
</html>
