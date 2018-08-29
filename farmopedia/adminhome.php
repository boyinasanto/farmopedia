<html>
<head>
<style>

ul
{
list-style-type:none;
padding:10px;
width:150px;
position:fixed;



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


h1 {
color:white;

text-align:center;

}
body
{
background-image: url("Sunset-Rainbow.jpg");
background-position:center;
background-repeat:no-repeat;
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
</style>
</head>
<body>

<h1>FARMOPEDIA</h1>
<ul>

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
<a href="crops.php">Add crops</a>
</div>
</div>


<li1><a href="market.html">Market</a></li1>


<li1><a href="commodities.php">Commodities</a><li1>

<li1> <a href="logout.php">Logout</a></li1>


</ul>




</body>
</html>

