<?php

$con = mysqli_connect("localhost:3307", "root", "");
$query = 'CREATE DATABASE db';

$result = mysqli_query($con, $query);
mysqli_close($con);


$conn = mysqli_connect("localhost:3307", "root", "", "db");
$query2 = 'create table logindetails(Username VARCHAR(20), Password VARCHAR(20))';
$result3 = mysqli_query($conn, $query2);

if(isset($_POST['submit']))
{
	$uname = $_POST['username'];
	$password = $_POST['pass'];	
	$query4 = "insert into logindetails(Username, Password) values ('$uname', '$password')";
	$result4 = mysqli_query($conn, $query4);
}


mysqli_close($conn);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go-Green</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&display=swap" rel="stylesheet">
    <style>
        /* CSS Reset  */
        body {
            color: white;
            margin: 0px;
            padding: 0px;
            background: url('img/bg5.jpg') no-repeat center center/cover;
            font-family: 'Baloo Chettan 2', cursive;
        }

        .left {
            display: inline-block;
            /* border: 3px solid red; */
            position: absolute;
            top: 10px;
            left: 60px;
        }

        .left img {
            width: 120px;
            filter: invert(100%);
        }

        .left div {
            text-align: center;
            line-height: 2px;
            font-size: 20px;
            font-weight: bold;
        }

        .mid {
            display: block;
            width: 40%;
            margin: 30px auto;
            /* border: 3px solid cyan; */

        }

        .right {
            display: inline-block;
            /* border: 3px solid green; */
            position: absolute;
            top: 20px;
            right: 30px;
        }

        .btn {
            margin: 0px 10px;
            background-color: black;
            color: rgb(241, 182, 19);
            padding: 4px 15px;
            border: solid 2px yellowgreen;
            border-radius: 10px;
            font-size: 15px;
            cursor: pointer;
            font-family: 'Baloo Chettan 2', cursive;
            list-style-type: none;
            text-decoration: none;
        }
        .right .btn a{
            text-decoration: none;
            color: rgb(241, 182, 19);
        }
        .right .btn a:hover{
        color: black;
        }
        .btn:hover {
            background-color: grey;
            color: black;
        }

        /* .navbar{

        } */
        .navbar li {
            display: inline-block;
            font-size: 17px;
        }

        .navbar li a {
            font-weight: bold;
            
            color: rgb(241, 182, 19);
            text-decoration: none;
            padding: 30px 10px;
        }

        .navbar li a:hover,
        .navbar li a.active {
            text-decoration: underline;
            color: rgb(25, 241, 159);
        }

        .container {
            /* border: 2px solid white; */
            margin: 70px 60px;
            padding: 75px 80px;
            border-radius: 15px;
            width: 50%;
        }
        .form-group input{
            text-align: center;
            border: 2px solid white;
            margin: 15px auto;
            padding: 4px;
            display: block;
            width: 508px;
            border-radius: 15px;
            font-family: 'Baloo Chettan 2', cursive;
            font-size: 15px;
        }
        .container h1{
            text-align: center;
        }
        .container button{
            display: block;
            margin: 35px auto;
            width: 50%;
        }
    </style>
</head>

<body>
    <header class="header">
        <!-- left box for logo  -->
        <div class="left">
            <img src="img/logo.webp" alt="">
            <div>
                Go-Green
            </div>
        </div>
        <!-- mid box for navbar  -->
        <div class="mid">
            <ul class="navbar">
                <li><a href="./project1/page1.html" class="active">Home</a></li>
                <li><a href="../AboutUs/AboutUs.html">About us</a></li>
                <li><a href="#">Gardener</a></li>
                <li><a href="../ContactUs/contact.html">Contact Us</a></li>
                <li><a href="../Our Community/community.html">Our Community</a></li>
            </ul>
        </div>
        <!-- right box for buttons  -->
        <div class="right">
            <button class="btn">Call Us</button>
            <button class="btn">Email Us</button>
            <button class="btn"><li><a href="../login/login.html">Login</a></li></button>
        </div>
    </header>
    <div class="container">
        <h1>Sign Up for free!</h1>
        <form action = '#' method = 'POST'>
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <input type="text" name="username" placeholder="Enter your Username">
            </div>
            <div class="form-group">
                <input type="text" name="pass" placeholder="Enter your Password">
            </div>
            <div class="form-group">
                <input type="text" name="address" placeholder="Enter your Address">
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Enter your Phone Number">
            </div>
            <div class="form-group">
                <input type="text" name="email" placeholder="Enter your Email-Id">
            </div>
            <button name='submit' class="btn"><li><a href="#"></a>Submit</li></button>
        </form>
    </div>
    <audio controls autoplay>
        <source src="sound1.mp3">
    </audio>
</body>

</html>