<?php

include 'db1.php';

$name = $_POST['name'];
$position_in_company = $_POST['position_in_company'];
$contact_name = $_POST['contact_name'];
$phone_number = $_POST['phone_number'];
$fax_number = $_POST['fax_number'];
$mobile_number = $_POST['mobile_number'];
$postal_address = $_POST['postal_address'];
$residental_address = $_POST['residental_address'];
$email = $_POST['email'];
$yes = $_POST['yes'];
$no = $_POST['no'];
$corridor_permit_no = $_POST['corridor_permit_no'];
$date = $_POST['date'];
$company_name = $_POST['company_name'];
$acn = $_POST['acn'];
$director_name = $_POST['director_name'];
$director_secretary_name_full = $_POST['director_secretary_name_full'];

$sql ="INSERT INTO road (name,position_in_company,contact_name,phone_number,fax_number,mobile_number,postal_address,residental_address,email,yes,no,corridor_permit_no,date,company_name,acn,director_name,director_secretary_name_full)
values('$name','$position_in_company','$contact_name','$phone_number','$fax_number','$mobile_number','$postal_address','$residental_address','$email','$yes','$no','$corridor_permit_no','$date','$company_name','$acn','$director_name','$director_secretary_name_full')";
$result = mysqli_query($conn, $sql);

header("Location: thank.html");

?>