<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body{
         
        }
        .registration{
            max-width:400px;
            margin:auto;
            border-radius:5px;
            background-color:grey;
           
            padding:20px;
            ;
        }
        h1{
            text-align: center;
            font-size: 50px;
            color: black;
            font-weight: bold;
            font-stretch: semi-condensed;
        }
        input[type=text],select{
            width:100%;
            padding:12px 20px;
            margin:8px 0;
            display:inline-block;
            border:1px solid #aaa;
            border-radius:4px;
            box-sizing:border-box;
        }
        input[type=submit]{
            background-color:rgb(211, 172, 141);
            font-style:initial;
        }
        
    </style>
</head>
<body>
     <br> 
   <h1>ADD USER</h1> 
     <br><br>
    <div class="registration">
        <?php
        if(isset($_SESSION['status']))
        {
            echo $_SESSION['status'];
        unset($_SESSION['status']);
        }
        ?>
        
        <form action="addi.php" method="POST">
            <label for="Name">First Name</label>
            <input type="text" class="inputfield"  name="fname"
              required>
              <label for="lname">Last Name</label>
              <input type="text" class="inputfield"  name="lname"
                required>
                <label for="mobile">Mobile Number </label>
              <input type="text" class="inputfield"  name="mobile"
                required>
                <label for="email">Eamil</label>
              <input type="text" class="inputfield"  name="email"
                required>
                <label for="address">Address</label>
              <input type="text" class="inputfield"  name="address"
                required>
             
            
            
             <input type="submit" value="Register">
            </form>
           </div>
    </div>
</body>
</html>