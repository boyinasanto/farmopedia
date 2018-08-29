<?php
$conn = mysqli_connect('localhost','root','','logintest3');

$query = "SELECT * FROM `soil`";
$result0 = mysqli_query($conn, $query);

$query = "SELECT * FROM `crop`";
$result5 = mysqli_query($conn, $query);

$options0 = "";
$options5 = "";

while($row2 = mysqli_fetch_array($result0))
{
    $options0 = $options0."<option>$row2[1]</option>";
}
while($row2 = mysqli_fetch_array($result5))
{
    $options5 = $options5."<option>$row2[2]</option>";
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


li
{
border:1px solid black;
border-width:1px;
display:block;
color:white;
font-size:22px;
padding: 20px;
text-align:center;
text-decoration:none;
}

li1 a
{
border:1px solid black;
border-width:1px;
display:block;
color:white;
font-size:22px;
padding: 20px;
text-align:center;
text-decoration:none;



}




li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color:green;
    color: white;
}


.dropdown{
    position:static;

}
.dropdown-content {
    display: none;
    position:static;


    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    float:right;

}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {background-color:}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color:green;
    }
form {
width:300px;
margin:auto;
padding:90px;

}

input[type=text], input[type=text] input[type = text] input[type = text ]
input[type = text] input[type = text ]
{
    width: 100%;
    padding:8px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    opacity:0.9;
}

button {
    background-color: #4CAF50;
    color: white;
    padding:8px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width:100%;

}

button:hover {
    opacity: 0.8;
}

.container
{
padding:20px;
position : relative;
background:rgba(0,0,0,.25);
color:white;
position:relative;
}

body
{
background: url("Sunset-Rainbow.jpg");
  background-position:center;
  background-repeat:no-repeat;
  background-attachment: fixed;
}
</style>

<body>

<form action="adminfert.php" method="POST">
  <div class="container">

<label><b>soil</b></label>
  <select name="soilname">
  <?php
  echo $options0;
  ?>
 </select><br><br>


<label><b>crop</b></label>
<select name="cropname">
  <?php
  echo $options5;
  ?>
 </select><br><br>

<label><b>Nitrogen(N)</b></label>
    <input type="text" placeholder="%" name="nitrogen" required>

<label><b>Phosphorus(P2O5)</b></label>
    <input type="text" placeholder="%" name="phosphorus" required>
<label><b>Quantity per hectare</b></label>
    <input type="text" placeholder="Quantity" name="quantity" required>
<label><b>Cost of Fertilizer</b></label>
    <input type="text" placeholder="cost" name="cost" required>
 <button type="submit">Submit</button>





 </div>
</form>
<ul>
<li1> <a href="adminhome.php">Home</a></li1>
<div class="dropdown">
<li>soil</li>
<div class="dropdown-content">
<a href="addsoil.html">Add Soil</a>
<a href="deletesoil.php">Delete Soil</a>
</div>
</div>

<div class="dropdown">
<li>fertilizer</li>
<div class="dropdown-content">

<a href="fert.php">Add fertilizer</a>
</div>
</div>


<div class="dropdown">
<li>crop</li>
<div class="dropdown-content">
<a href="crops.php">Add crop</a>
</div>
</div>


<li1><a href="market.html">Market</a></li1>

<li1><a href="commodities.php">Commodities</a><li1>

<li1> <a href="logout.php">Logout</a></li1>


</ul>

</body>
</html>