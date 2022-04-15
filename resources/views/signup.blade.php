<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>

<body >
    <header>
        <nav class="navbar">
            <ul>
                <li id="logo">AUSH BASICS.</li>
                <li><a href="#">SERUMS</a></li>
                <li><a href="#">FACEWASH</a></li>
                <li><a href="#">SUNSCREENS</a></li>
                <li><a href="#">CLEANSERS</a></li>
                <li><a href="aboutus">ABOUT US</a></li>
                <li><a href="blog">BLOG</a></li>
            </ul>
        </nav>
    </header>
    <h1>CREATE ACCOUNT</h1>
    <div class="container">
        <p id="msg" style="font: size 10px;"></p>
        <form action="users" method="POST">
            @csrf
            <input type="text" name="username" id="userName" placeholder="USER NAME ">
            <br>
            <input type="password" name="password" id="passWord" placeholder="PASSWORD ">
            <br>
            <input id="createAcc" type="submit" value="Create Account">
            <br>
        </form>
    </div>
   
    <!-- <script src="home.js"></script> -->
</body>
</html>