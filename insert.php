<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['phone'];
$txtdob = $_POST['dob'];
$txtadr = $_POST['address'];
$txtdept = $_POST['dept'];
$sql = "INSERT INTO `tbl_contact` (name, dept , phone , address , email , dob ) VALUES ('0', '$txtName', '$txtdept', '$txtPhone', '$txtadr','$txtEmail','$txtdob's)";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

$conn->close();
?>