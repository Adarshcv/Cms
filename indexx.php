<?php session_start();?>
<html>
	<head>
		<title>Address Book</title>
		 
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
	</head>
	<body>
    <div class="jin">
        <br>
        <br>
        <br>
        <br><br><br><br> <br>

    <h1>ADDRESS BOOK PROJECT </h1>
       <div class="form-box">
           
           <h1>WELCOME TO ADDRESS BOOK</h1>
		   <?php
    if(isset($_SESSION['status']))
  {
  
   ?>
   <div class="alert" role="alert">
  <strong>Hey! <?php echo $_SESSION['status']; ?></strong>
 

</div>

<?php
   unset($_SESSION['status']);
  }
  ?>
           <div class="button-box">
               
               <div class="conatiner">
					<div class="row" style="font-family: 'Baloo Bhaina', cursive;">
						<div class="col-sm-6">
							<a href="login.php"><button id="login" class="loginbtn" >Login</button></a>
						</div>
                    
						<div class="col-sm-6">
                            <br>
							<a href="register.php"><button id="register" class="registerbtn">Register</button></a>
						</div>
					</div>
				</div>
              
           

            
            
             
               
        
  
   </div>
   </div>
  