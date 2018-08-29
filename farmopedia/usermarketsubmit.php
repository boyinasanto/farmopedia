<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `commodities` WHERE CONCAT(`id`, `states`, `district`, `area`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
 }
 else{
     $query = "SELECT * FROM `commodities`";
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
right:20%;
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
    background:rgba(0,0,0,.5);
    width:100%;
left:20%;
  position:relative;
    opacity : 0.85;
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
    color:white;
}
th, td {
    padding: 2.5px;
    color:white;
}
th {
    text-align: left;
}


</style>

<body>





  <form action="usermarketsubmit.php" method="post">


  <input type="text" name="valueToSearch" placeholder="your area"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>

<table>

  <tr>
     <th>id</th>
    <th>states</th>
    <th>district</th>
    <th>area</th>
    <th>marketname</th>
    <th>potato</th>
    <th>onion</th>
    <th>tomato</th>
    <th>brinjal</th>
    <th>carrot</th>
    <th>capsicum</th>
    <th>cucumber</th>
    <th>beetroot</th>
    <th>drumsticks</th>
  </tr>
<?php while($row = mysqli_fetch_array($search_result)):?>
<tr>
    <td><?php echo$row["id"];?></td>
    <td><?php echo$row["states"];?></td>
    <td><?php echo$row["district"];?></td>
    <td><?php echo$row["area"];?></td>
    <td><?php echo$row["marketname"];?></td>
    <td><?php echo$row["potato_cost"];?></td>
    <td><?php echo$row["onion_cost"];?></td>
    <td><?php echo$row["tomato_cost"];?></td>
    <td><?php echo$row["brinjal_cost"];?></td>
    <td><?php echo$row["carrot_cost"];?></td>
    <td><?php echo$row["capsicum_cost"];?></td>
    <td><?php echo$row["cucumber_cost"];?></td>
    <td><?php echo$row["beetroot_cost"];?></td>
    <td><?php echo$row["drumsticks_cost"];?></td>
</tr>
<?php endwhile;?>
</table>
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


