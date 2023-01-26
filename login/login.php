<?php
$con = mysqli_connect("localhost:3307", "root", "", "db");

if(isset($_POST['submit']))
{
$uname = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from logindetails where Username = '".$uname."' and Password = '".$password."' ";
$result = mysqli_query($con, $sql);
$row = mysqli_num_rows($result);
if($row>0)
{
	echo 'Login Successful';
}
else
{
	echo 'Login Failed';
	exit();
}

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>login form</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method = 'POST' action = '#'>
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" name = 'username' placeholder="Email or Phone" id="username">

        <label for="password">Password</label>
        <input type="password" name = 'password' placeholder="Password" id="password">

        <button name  = 'submit' ><li><a href="../project2/index.html">Login</a></li></button>
    </form>
</body>
</html>
