<?php
$conn = mysqli_connect('localhost','root','','logintest3');

$query = "SELECT * FROM `market`";
$result0 = mysqli_query($conn, $query);
$result5 = mysqli_query($conn, $query);
$result6 = mysqli_query($conn, $query);
$result7 = mysqli_query($conn, $query);


$options0 = "";
$options5 = "";
$options6 = "";
$options7 = "";

while($row2 = mysqli_fetch_array($result0))
{
    $options0 = $options0."<option>$row2[1]</option>";
}
while($row2 = mysqli_fetch_array($result5))
{
    $options5 = $options5."<option>$row2[2]</option>";
}

while($row2 = mysqli_fetch_array($result6))
{
    $options6 = $options6."<option>$row2[3]</option>";
}
while($row2 = mysqli_fetch_array($result7))
{
    $options7 = $options7."<option>$row2[4]</option>";
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
top:15%;


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
padding:10px;

}

input[type=text], input[type=text] input[type = text] {
    width: 100%;
    padding: 8px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 9px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;

}

button:hover {
    opacity: 0.8;
}

.container {
 padding: 10px;
 width : 350px;
background:rgba(0,0,0,.25);
color:white;

position:relative;
left:10%;

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
    padding:4px;

}
th {
    text-align: left;
}


</style>
<body>
<form action="admincommodities.php" method="POST">
  <div class="container">
  <label><b>State</b></label>
  <select name="states">
  <?php
  echo $options0;
  ?>
 </select><br><br>


<label><b>District</b></label>
<select name="district">
  <?php
  echo $options5;
  ?>
 </select><br><br>

<label><b>Area</b></label>
    <select name="area" >
	  <?php
	  echo $options6;
	  ?>
 </select><br><br>

<label><b>Market Name</b></label>
    <select name="marketname">
	  <?php
	  echo $options7;
	  ?>
 </select><br><br>
<table align = "center">
  <tr>
    <th>Item</th>
    <th>Price/KG</th>
  </tr>
<tr>
        <td>Potato</td>
        <td><input type="text" name="potato_cost" size="30"/></td>
    </tr>
<tr>
        <td>Onion</td>
        <td><input type="text" name="onion_cost" size="30"/></td>
    </tr>
<tr>
        <td>Tomato</td>
        <td><input type="text" name="tomato_cost" size="30"/></td>
    </tr>
<tr>
        <td>Brinjal</td>
        <td><input type="text" name="brinjal_cost" size="30"/></td>
    </tr>
<tr>
        <td>Carrot</td>
        <td><input type="text" name="carrot_cost" size="30"/></td>
    </tr>
<tr>
        <td>Capsicum</td>
        <td><input type="text" name="capsicum_cost" size="30"/></td>
    </tr>
<tr>
        <td>Cucumber</td>
        <td><input type="text" name="cucumber_cost" size="30"/></td>
    </tr>
<tr>
        <td>Beet Root</td>
        <td><input type="text" name="beetroot_cost" size="30"/></td>
    </tr>
<tr>
        <td>Drumsticks</td>
        <td><input type="text" name="drumsticks_cost" size="30"/></td>
    </tr>
</table>
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