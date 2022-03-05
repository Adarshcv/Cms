<?php  
   
session_start();  
   $host = "localhost";  
   $user = "root";  
   $password = '';  
   $db_name = "addressbookproject";  
     
   $link = mysqli_connect($host, $user, $password, $db_name);  
   if(mysqli_connect_errno()) {  
       die("Failed to connect with MySQL: ". mysqli_connect_error());  
   }  
 
   $first_name = mysqli_real_escape_string($link, $_REQUEST['fname']);
  $lname=mysqli_real_escape_string($link, $_REQUEST['lname']);
  $username=mysqli_real_escape_string($link, $_REQUEST['Username']);
  $password=mysqli_real_escape_string($link, $_REQUEST['Password']);
  $confirmpassword=mysqli_real_escape_string($link, $_REQUEST['Psw']);
  
  if($password==$confirmpassword)
  {
      
      $sql = "INSERT INTO `user` ( `First_Name`,`Last_Name`, `Username`,`Password`) VALUES ('$first_name','$lname', '$username','$password')";

// insert in database 
$rs = mysqli_query($link, $sql);

if($rs)
{
    $_SESSION['status']="sign up successfull!Now Login ";
	$result=header('location:indexx.php');
     echo"sucess";

}
  }
  else
  {
    $_SESSION['status']="sign up  not successfull";
    $result=header('location:first.php');
  }

?>  