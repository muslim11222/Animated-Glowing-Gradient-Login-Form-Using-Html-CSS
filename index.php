<?php 
      $hostname = 'localhost';
      $username = 'root';
      $password = '';
      $db_name = 'new_db';
 
      $conn = mysqli_connect($hostname, $username, $password, $db_name);
 
     if(!$conn) {
          echo "Error connecting".mysqli_connect_error();
     }

     if(isset($_POST['submit'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];


          $sql = "INSERT INTO data (username, password) VALUES ('$username', '$password')";
          $result = mysqli_query($conn, $sql);

          if($result === true) {
               echo "";
          } else {
               echo "Error inserting data" .mysqli_connect_error();
          }
     }
?>





<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form Desgin</title>

     <!-- css link start here -->
      <link rel="stylesheet" href="style.css">
</head>
<body>


     <div class="container">
          <div class="form">
               <h2>Login Form</h2>

               <form action="" method="POST">
                    <div class="inputBox">
                         <input type="text" name="username" placeholder="Username">
                    </div>

                    <div class="inputBox">
                         <input type="password" name="password" placeholder="Password">
                    </div>

                    <div class="inputBox">
                         <input type="submit" name="submit" value="Login">
                    </div>

                    <p>Forget Password? <a href="#">Click here</a></p>
               </form>
          </div>
     </div>
</body>
</html>