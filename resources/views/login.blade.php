<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
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
    <h1>LOGIN PAGE</h1>
    
    <div class="container">
       

        <form action="accounts" method="POST">
        @if(Session::get('created'))
        <h5>{{Session::get('created')}}</h5>
        @endif
        @if(Session::get('msg'))
        <p>{{Session::get('msg')}}</p>
    @endif
            @csrf
            <input type="text" name="username" id="userName" placeholder="USER NAME ">
            <br>
            <input type="password" name="password" id="passWord" placeholder="PASSWORD ">
            <br>
            <input id="loginSub" type="submit" value="login">
            <input id="signUp" type="button" value="Signup">
            <br>
        </form>
    </div>
   
    <script src="/js/signup.js"></script>
</body>
</html>