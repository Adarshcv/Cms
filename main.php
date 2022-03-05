<html>
<head>
  <title> details page </title>
  <style >
      h1{
        text-align:center;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
 font-size: 50px;
    color:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color:rgb(167, 81, 41)
          
      }
      table{
          border: 1px solid black;
          border-collapse:collapse;
          width:100%;
          color:black;
          font-famil:monospace:
          font-size:35px;
          text-align:left;
          border-style:solid;
      }
      th{
          font-size:25px;
          border-style:solid;
      }
      td{font-size:20px;
        border-style:solid; 
      }
      .loginbtn{
    width:10%;
    height:5%;
    padding:10px 30px;
    cursor:pointer;
    display: block;
    background:grey;
    border:0;
    outline:none;
    border-radius:30px;
    font-size:20px;
}
      </style>
  </head>
  <body>
      <h1> ADDRESS BOOK DETAILS<a href="add.php"><button id="login" class="loginbtn" >ADD</button></a></h1>
							
					
  <table>
      <tr>
          <th>SI.NO</th>
          <th>FirstName</th>
          <th>LastName</th>
          <th>Mobile no</th>
          <th>Email</th>
          <th>Permanent Address</th>
</tr>
<?php
 $host = "localhost";  
 $user = "root";  
 $password = '';  
 $db_name = "addressbookproject";  
   
 $link = mysqli_connect($host, $user, $password, $db_name);  
 if(mysqli_connect_errno()) {  
     die("Failed to connect with MySQL: ". mysqli_connect_error());  
 }  
$sql="select `SI.no`,`fname`,`lname`,`mobileno`,`email`,`address` from register";
$result=$link-> query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
    echo  "<tr><td>" .$row["SI.no"] ."</td><td>". $row["fname"] . "</td><td>". $row["lname"] ."</td><td>". $row["mobileno"] ."</td><td>". $row["email"] ."</td><td>". $row["address"] ."</td></tr>";
}
echo "/<table>";

}
else{
    echo "0 result";
}
$link->close();
?>
  </table>
  </body>
  </html>