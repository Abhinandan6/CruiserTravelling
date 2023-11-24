<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <link rel="icon" href="images/logo.jpg" />
  <link rel="stylesheet" href="registration.css">

</head>

<body>
  <form action="reg.php" method="post"> 
    <img src="./images/logo.jpg" width="120px" style="margin-left: 35%;margin-bottom: 50px;">
    <input type="text" class="input" name="username" placeholder="Username">
    <input type="password" class="input" name="password" placeholder="Password">
    <input type="email" class="input" name="email" placeholder="Email">
    <input type="tel" class="input" name="phone" placeholder="Phone Number">
    <button type="submit"  class="submit" name="submit" id="btn" >Register</button>

  </form>
</body>
</html>
<style>
    body {
  /* background-color: #f4f4f4; */
  background-image: url("../project/images/blackpanther.jpg");
  font-family: Arial, sans-serif;
  padding: 20px;
}

form {
  max-width: 400px;
  margin: 0 auto;
  margin-top: 15%;
  background-color: black;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input[type="text"],
input[type="password"],
input[type="email"],
input[type="tel"],
button {
  color: white;
  width: 100%;
  margin-bottom: 10px;
  padding: 10px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  color: white;
}

button {
  background-color: #007bff;
  color: #0b0b0b;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

.submit {
  border: none;
  border-radius: 30px;
  font-size: 15px;
  height: 45px;
  outline: none;
  width: 100%;
  color: black;
  background: rgba(255, 255, 255, 0.7);
  cursor: pointer;
  transition: .01s;
}

.input {
  height: 45px;
  width: 87%;
  border: none;
  border-radius: 30px;
  color: #000000;
  font-size: 15px;
  padding: 0 0 0 45px;
  background: rgba(255, 255, 255, 0.1);
  outline: none;
  margin: 5px;
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
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"]; // Hash the password
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    

    // Check if the email is already registered
    $query = "SELECT * FROM registration WHERE email = '$email'";
    $result = $conn->query($query);
    $count = mysqli_num_rows($result);
    if ($result->num_rows > 0) {
        echo "Email is already registered. Please use a different email.";
    } else {
        // Insert user data into the database
        $insertQuery = "INSERT INTO registration (username,password, email,phone ) VALUES ('$username', '$password', '$email', '$phone')";
        
        if ($conn->query($insertQuery) === TRUE) {
          
          echo"
          <script>
         alert('you are sucessfully registered')
          </script>
           ";
           header("Location: login.php");
        } else {
            echo "Error: " . $insertQuery . "<br>" .mysqli_error($conn);
        }

      }
    // }
    // if ($count==1){
    //     header("Location:home.php");
    //     echo'alert("You are redirected to login!!!!!")';
    // }
    // else {
    //     echo  '<script>
    //                 window.location.href = "reg.php";
    //                 alert("Please enter the details!!")
    //             </script>';
    //       }
  }
}

?>