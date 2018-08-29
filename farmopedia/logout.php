<?php
session_start();
session_destroy();
header("Location:2.html");
?>

<html>
<style>
form
{
width:300px;
margin:auto;
padding:50px;
}
button
{
background-color: #4CAF50;
color: white;
padding: 7px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
}
body
{
background: url("Sunset-Rainbow.jpg");
  background-position:center;
  background-repeat:no-repeat;
  background-attachment: fixed;
  }
h3
{
font-color:black;
text-align:center;
}
</style>
<body>

<h3>Thank you for using farmopedia</h3>
<form action="">
<button>LOG OUT</button>
</form>
</body>
</html>

