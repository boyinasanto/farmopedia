<?php
$conn = mysqli_connect('localhost','root','','logintest3');

$query = "SELECT * FROM `soil`";
$result0 = mysqli_query($conn, $query);

$options0 = "";

while($row2 = mysqli_fetch_array($result0))
{
    $options0 = $options0."<option>$row2[1]</option>";
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

padding:100px;

}

input[type=text], input[type=text] {
    width: 100%;
    padding:10px;
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
    padding:25px;
background:rgba(0,0,0,.25);
color:white;
position:center;


}
body
{
background-image: url("Sunset-Rainbow.jpg");
background-position:center;
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100%;
}


</style>

<body>
<form action="admincrops.php" method="POST">


  <div class="container">
  <label><b>soil</b></label>
    <select name="soilname">
    <?php
    echo $options0;
    ?>
 </select><br><br>
    <label><b>Crop</b></label>
    <input type="text" placeholder=" cropname" name="cropname" required>
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