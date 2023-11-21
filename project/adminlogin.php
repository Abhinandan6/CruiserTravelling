<?php
include("adminlogin.html");
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
    $password = $_POST['password'];

    $sql = "SELECT * FROM adminlogin WHERE username = '$username' AND password = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    
    if($count >0){  
        header("Location:dashboard/dashboard.php");
    }  
    else{  
        echo  '<script>
                    window.location.href = "adminlogin.php";
                    alert("Login failed. Invalid username or password!!")
                </script>';
    }     
}
}
?>
