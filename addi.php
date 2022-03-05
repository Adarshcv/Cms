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
   $mobile=mysqli_real_escape_string($link, $_REQUEST['mobile']);

   $email=mysqli_real_escape_string($link, $_REQUEST['email']);

   $address=mysqli_real_escape_string($link, $_REQUEST['address']);
   echo $first_name;
    

   $sql = "INSERT INTO `register` ( `fname`, `lname`,`mobileno`,`email`,`address`) VALUES ('$first_name', '$lname','$mobile','$email','$address')";


// insert in database 
$rs = mysqli_query($link, $sql);

if($rs)
{
    $_SESSION['status']="registration successfull";
    header('location:main.php');
    
  
   
}
else{
    echo "not sucess";
}

        
?>  