
<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `soil` WHERE CONCAT(`id`,`soilname`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
 }
 else{
     $query = "SELECT * FROM `soil`";
     $search_result = filterTable($query);
}
  function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "logintest3");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
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

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    align : center;
    color:white;
}
th, td {
    padding: 2.5px;
    color:white;
    text-align:center;
}
th {
    text-align:center;

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
width:400px;


}
body
{
background-image: url("Sunset-Rainbow.jpg");
background-position:center;
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100%;
}
input[type=text]{
    width: 100%;
    padding:8px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


</style>

<body>
<form action="usersoilsubmit.php" method="post">
 <div class = "container">
  <input type="text" name="valueToSearch" placeholder="enter your soil"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>

<table>

  <tr>

    <th>soilname</th>
    <th>description</th>

  </tr>
<?php while($row = mysqli_fetch_array($search_result)):?>
<tr>

    <td><?php echo$row["soilname"];?></td>
    <td><?php echo$row["description"];?></td>

</tr>
<?php endwhile;?>
</table>
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