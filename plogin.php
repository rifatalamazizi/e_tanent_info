<html>
<head>
  <title>Login</title>
</head>
<body>
  <div class="h1">
    <h1>Login page </h1>
    <form class="login" action="#" method="post">
      <label>ID :</label>
      <input type="text" name="u_id"><br><br>
      <label>Password</label>
      <input type="Password" name="password"><br><br>
      <input type="submit" name="submit">
    </form>


  </div>
  
</body>
</html>

<?php
   include_once("policesession.php");
   //session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $u_id = mysqli_real_escape_string($con,$_POST['u_id']);
      $password = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT id FROM user WHERE u_id = '$u_id' and password = '$password'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         
        // $_SESSION['login_user'] = $u_id;
         
         header("location: aprove.php");
      }else {
        echo "Worng Input!";
      }
   }
?>
