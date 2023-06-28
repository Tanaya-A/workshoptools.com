<!doctype html>
<html lang="ar" dir="rtl">
  <head>

  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">

    <title>Document</title>
  </head>
  <body>
    <h1>Hello World!</h1>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  </body>
</html>











Code welcome.php as described/written in the video
<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
    <style>
header{font-family: sans-serif;}
ul{
    list-style-type: none;
    margin-top: 25px;  
    word-spacing: 20px;
}
ul li{display: inline-block;}
ul li a{
    text-decoration: none;
    color: #fff;
    padding: 5px 25px;
    border: 0.5px solid transparent;
    transition: 0.6s ease;
    font-size: 18px;
    text-align: center;

}
ul li a:hover{
    background-color: #fff;
    color: #000;
}
body{
    background-image:linear-gradient(rgba(0, 0, 0, 0.63),rgba(0, 0, 0, 0.616)) , url("workshop.jpg");
    background-size: cover;
}
.title{
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%,-50%);
}

.title h1{
    color: #fff;
    font-size: 70px;
}
.button{
    position: absolute;
    top: 57%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.btn{
    border: 1px solid #fff;
    padding: 10px 30px;
    color: #fff;
    text-decoration: none;
    transform: 0.06s ease;
}
.btn:hover{
    background-color: #fff;
    color: #000;
}
.logo
{
  top: 10px  
}
</style>
  </head>
  <body>
  <header>
<div class="main">
<ul>
<li><a href="#">Home</a></li>
<li><a href="services.html">Services</a></li>
<li><a href="aboutus.html">About</a></li>
<li><a href="gallery.html">Gallery</a></li>
</ul>
</div>
<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?></h3>
<hr>

</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php

session_start();
$_SESSION = array();
session_destroy();
header("location: login.php");

?>





input[type="text"],
input[type="password"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }




    <?php
    include ("connection1.php");
    $username=$_POST["username"];
    $password=$_POST["password"];
    


    
    
            
        <!--<nav class="navbar">
                <ul>
                    <li><a href="#">ISSUE TOOL</a></li>
                    <li><a href="#">RETURN TOOL</a></li>
                    <LI><a href="#">LOGOUT</a></LI>
                </ul></nav>-->
                transition: top 0ms ease-in-out 200ms,
                opacity 200ms ease-in-out 0ms,
                transform 20ms ease-in-out 0ms;




                <div class="container mt-4">
<form action="" method="post" style="position: absolute;top:30%;left:35%;
                transform: translate (-50%,-50%)  ;
                width:380px; padding:20px 30px;
                background:rgba(255,255,255,0.40);
                box-shadow:2px 2px 5px 5px rgba(0,0,0,0.15);border-radius: 10px;">
  <div class="form-group">
  <h2 style="text-align: center;color: #222;margin: 10px 0px 20px;
                        font-size: 25px;color:rgb(104,15,15);"><u>Please Login Here!</u></h2>
    <label for="exampleInputEmail1"><b>Username</b></label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><b>Password</b></label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit"><a href="ss.html" ; ">Sign-in</a></button>
  <div class="form-element
</form>





  
<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>-->
    <!--</li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
    </li>
    <li class="nav-item">-->



    <div class="center"><button id="show-issue" style="cursor: pointer;border: 1px solid #fff ;border-radius: 10px 20px;padding: 10px 10px;
                    background-color: rgb(21, 194, 113);color: #fff;
                        text-decoration: none; transform: 0.06s ease;top: 85%; left: 30%;
                        ;font-size:20px;" >Issue</button></div>








                        <div class="popup" style="position: absolute;top:30%;left:40%;
                transform: translate (-50%,-50%)  ;
                width:200px; padding:20px 30px;
                background:#f7f5f5;
                box-shadow:2px 2px 5px 5px rgba(0,0,0,0.15);border-radius: 10px;">
                    <div class="close-btn" style="Position: absolute;top:10px; right:10px;
                    width:15px;
                    height:15px;
                    background:#888;
                    color:#eee;
                    text-align:center;
                    line-height:15px;
                    border-radius:15px;
                    cursor: pointer;">&times;</div>
                   
                   <div class="form">
                        <h2 style="text-align: center;color: #222;margin: 10px 0px 20px;
                        font-size: 25px;">ISSUE</h2>
                        <div class="form-element" style="margin: 15px 0px;">
                            <label for="quantity" style="font-size: 14px;color:#222;">Quantity:</label>
                            <input type="number" id="quantity" name="quantity" required 
                            style="margin-top: 5px;display: block;width: 100%;padding: 10px;outline: none;
                            border:1px solid #aaa;border-radius: 5px;">
                        </div>
                        <div class="form-element">
                            <label for="date" style="font-size: 14px;color:#222;">Date needed:</label>
                            <input type="date" id="date" name="date" required  style="margin-top: 5px;display: block;width: 100%;padding: 10px;outline: none;
                            border:1px solid #aaa;border-radius: 5px;">
                        </div>
                        <div class="form-element">
                            <button style="cursor: pointer;width: 100%; height:40px;margin-top: 20px;
                            padding: 10px;outline: none;color: #fff;
                            border:none;border-radius: 10px;background: rgb(21, 194, 113);">SUBMIT</button>
                            
                        
                       </div>   
                </div></div>
                </div>https://empire-s3-production.bobvila.com/articles/wp-content/uploads/2013/07/woodworking-workshop-design-650x433.jpg <div class="popup" style="position: absolute;top:30%;left:40%;
               
               
                <div class="popup" style="position: absolute;top:30%;left:40%;
                transform: translate (-50%,-50%)  ;
                width:200px; padding:20px 30px;
                background:#f7f5f5;
                box-shadow:2px 2px 5px 5px rgba(0,0,0,0.15);border-radius: 10px;">
                    <div class="close-btn" style="Position: absolute;top:10px; right:10px;
                    width:15px;
                    height:15px;
                    background:#888;
                    color:#eee;
                    text-align:center;
                    line-height:15px;
                    border-radius:15px;
                    cursor: pointer;">&times;
                </div>
                   
                   <div class="form">
                        <h2 style="text-align: center;color: #222;margin: 10px 0px 20px;
                        font-size: 25px;">ISSUE</h2>
                        <div class="form-element" style="margin: 15px 0px;">
                            <label for="quantity" style="font-size: 14px;color:#222;">Quantity:</label>
                            <input type="number" id="quantity" name="quantity" required 
                            style="margin-top: 5px;display: block;width: 100%;padding: 10px;outline: none;
                            border:1px solid #aaa;border-radius: 5px;">
                        </div>
                        <div class="form-element">
                            <label for="date" style="font-size: 14px;color:#222;">Date needed:</label>
                            <input type="date" id="date" name="date" required  style="margin-top: 5px;display: block;width: 100%;padding: 10px;outline: none;
                            border:1px solid #aaa;border-radius: 5px;">
                        </div>
                        <div class="form-element">
                            <button style="cursor: pointer;width: 100%; height:40px;margin-top: 20px;
                            padding: 10px;outline: none;color: #fff;
                            border:none;border-radius: 10px;background:black">SUBMIT</button>
                        
                       </div>   
                </div></div>