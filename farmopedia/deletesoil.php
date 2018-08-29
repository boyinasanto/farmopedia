


<!DOCTYPE html>
<html>
<style>


ul
{
list-style-type:none;
padding:10px;
width:150px;
position:absolute;
top:-3%;
left:-80%;


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
    padding: 12px;
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
color:white;
    padding:20px;
background:rgba(0,0,0,.25);
color:white;
width:500px;
position:relative;
left:-25%;

}
body
{
background: url("Sunset-Rainbow.jpg");
  background-position:center;
  background-repeat:no-repeat;
  background-attachment: fixed;
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    align : center;
}
th, td {
    padding: 2.5px;
    text-align:center;

}
th {
    text-align:center;
    background-color:green;
    padding:10px;
    opacity: 0.8;
}
td a
{
color:white;

}


</style>
<body>

<form action="delete.php" method="POST">
<div class="container">
<table>

  <tr>

    <th>soilname</th>

    <th>description</th>
    <th>Delete</th>
    </tr>

<?php
$conn = mysqli_connect('localhost','root','','logintest3');
$sql ="SELECT * FROM SOIL";
$records = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($records))
{
  echo "<tr>";
  echo "<td>".$row["soilname"]."</td>";

  echo "<td>".$row["description"]."</td>";
  echo "<td><a href=delete.php?id=".$row["id"].">Delete</a></td>";
}
?>

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