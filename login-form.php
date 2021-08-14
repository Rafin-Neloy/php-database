<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Login</title>
</head>
<body>

    <h1>Login Form</h1>


<?php
         include "dataread.php";
          $username = $password = "";
          $usernameerror = $passworderror = "";
          $flag= false;
          if($_SERVER["REQUEST_METHOD"] == "POST"){
         
          if (empty($_POST["username"])) {
            $usernameerror = "User Name is required";
            $flag = true;
          }
      
          if (empty($_POST["password"])) {
            $passworderror = "password is required";
            $flag = true;
          }

          if(!$flag){
            $username =  input($_POST["username"]);
            $password = input($_POST["password"]);
            $result =login($username,$password );
            if($result){
              header("Location: welcome.php");
          
                         
            }
            echo "invalid Password ";
          }
       

        
      }
        
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
           $data = htmlspecialchars($data);
          } 
        
     
        ?>  



   <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
   <label for="userName">User Name :</label>
        <input type="text" id="username" name="username">         <span style="color:red;"> * <?php echo $usernameerror  ?></span> <br> 

        <a href=""></a>
        <label for="Password">Password :</label>
        <input type="password"  name="password">        
        <span style="color:red;"> * <?php echo $passworderror  ?></span> <br> 

        <input type="submit" name="submit" value="Login"> <br> <br>
        </form>
        <a href="registration.php"> Register</a> 

        

</body>
</html>