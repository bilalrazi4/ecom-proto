<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="css/welcome.css">
</head>

<body >
    <header>
        <nav class="navbar">
            <ul>
                <li id="logo">AUSH BASICS.</li>
                <li><a href="serum">SERUMS</a></li>
                <li><a href="facewash">FACEWASH</a></li>
                <li><a href="sunscreen">SUNSCREENS</a></li>
                <li><a href="cleansers">CLEANSERS</a></li>
                <li><a href="aboutus">ABOUT US</a></li>
                <li><a href="blog">BLOG</a></li>
            </ul>
        </nav>
    </header>
   
    @if(Session::get('msg'))
        <h1>WELCOME {{Session::get('msg')}} </h1>
    @endif
    
   
    <!-- <script src="/js/home.js"></script> -->
</body>
</html>