<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="loginpg.css" />
  <link rel="icon" href="./images/logo.jpg" />
  <!-- <script>
    function validate() {
      if (document.getElementById("Username").value.length == 0 || document.getElementById("Password").value.length == 0) {
        alert("Enter username and password");
      }
      else
        alert("Login Succesful");
    } 
  </script> -->

  <title>Login Page</title>
</head>

<body>
  <form action="" method="post">
    <div class="box">
      <div class="container">
        <img src="./images/logo.jpg" width="120px" style="margin-left: 35%;">
        <form action="index.html">
          <div class="top">

            <a href="reg.php" id="newuser">New user ?</a>
            <header>Login</header>
          </div>

          <div class="input-field">

            <input type="text" class="input" placeholder="Username" name="username" />
            <i class="bx bx-user"></i>
            <input type="Password" class="input" placeholder="Password" name="password" />
            <i class="bx bx-lock-alt"></i>
            <button type="submit" class="submit" name="submit" id="btn">
              <label for="btn">Submit</label>
          </div>

          <div class="two-col">
            <div class="one">
              <a href="adminlogin.php">Admin-login</a>
            </div>
            <div class="two">
              <label><a href="#">Forgot password?</a></label>
            </div>
          </div>
      </div>
    </div>
  </form>

</body>

</html>
<style>
    * {
  font-family: 'poppins', sans-serif;
}

body {
  background-image: url("./images/back-img.jpg");
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-repeat: no-repeat;

}

.box {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 90vh;
}

.container {
  width: 350px;
  display: flex;
  flex-direction: column;
  padding: 0 15px 0 15px;

}

#newuser {
  color: #000;
  font-size: small;
  display: flex;
  justify-content: center;
  padding: 10px 0 10px 0;
  text-decoration: none;
}

header {
  color: #000;
  font-size: 30px;
  display: flex;
  justify-content: center;
  padding: 10px 0 10px 0;
}

.input-field .input {
  height: 45px;
  width: 87%;
  border: none;
  border-radius: 30px;
  color: black;
  font-size: 15px;
  padding: 0 0 0 45px;
  background: rgba(255, 255, 255, 0.1);
  outline: none;
  margin: 5px;
}

i {
  position: relative;
  top: -33px;
  left: 17px;
  color: #000;
}

.submit {
  border: none;
  border-radius: 30px;
  font-size: 15px;
  height: 45px;
  outline: none;
  width: 100%;
  color: black;
  background: rgba(37, 33, 33, 0.7);
  cursor: pointer;
  /* transition: .1s; */
}

.submit:hover {
  box-shadow: 1px 5px 7px 1px rgba(37, 33, 33, 0.2);
}

.two-col {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  color: #30549f;
  font-size: small;
  margin-top: 10px;
}

.one {
  display: flex;
  color: #060606;
}

label a {
  text-decoration: none;
  color: #000000;
}
</style>

<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '';
$mysql_name = "travel"; 
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_name);
if (!$conn) {
    die("Cannot connect to the database: " . mysqli_connect_error());
}else{
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    $sql = "SELECT * FROM registration WHERE username = '$username' AND password = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    
    if($count >0){  
        header("location:home\home.php");
    }  
    else{  
        echo  '<script>
                    window.location.href = "login.php";
                    alert("Login failed. Invalid username or password!!")
                </script>';
    }     
}
}
?>
