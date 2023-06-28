<?php
@include 'config.php';

if(isset($_POST["submit"]))
{
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    
    if(!empty($username) && !empty($password))
    {
        $query = "SELECT * FROM form1 WHERE username='$username'limit 1";
        $result = mysqli_query($conn,$query);
        
        if($result)
        {
            if($result && mysqli_num_rows($result) >0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password']==$password)
                {
                    header("location: ss.php");
                    die;
                }
            }
        }
        echo "<script type='text/javascript'>alert('Wrong username or password')</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('Wrong username or password')</script>";
    }


}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
.navbar{ 
    background-color: #f2f2f2; 
    padding:10px;border-radius:40px;
    margin-top:10px;
}
.navbar li{
    margin-right: 10px;
}
.navbar ul{list-style-type: none;margin:0;padding:0;display: flex;}
ul{
    list-style-type: none;
    margin-top: 25px;  
    word-spacing: 20px;}
.navbar li a{
  font-family:Tahoma;
    color: black;
    border: 0.5px solid transparent;
    transition: 0.6s ease;
    font-size: 20px;
    text-decoration:none;
    padding:5px 25px;
    text-align: center;
  border-radius:40px}
.navbar li a:hover{background-color: rgb(108 ,15,15,0.85); color: #fff;border-radius:40px}
body{
    background-image:linear-gradient(rgba(0, 0, 0, 0.63),rgba(0, 0, 0, 0.616)) , url("https://empire-s3-production.bobvila.com/articles/wp-content/uploads/2013/07/woodworking-workshop-design-650x433.jpg");
    background-size: cover;
}
.title h2{
    color:rgb(255,255,255);
    text-align: center;
    margin: 5px 0px 20px;
    font-size: 25px;
}
.input_field{
    font-size:23px;
}
input{
    margin-top: 5px;
    display: block;
    width: 95%;
    padding: 10px;
    outline: none;
    border:2px solid #000;
    border-radius: 5px;
}
form{
    position: absolute; border : 10px solid #fff;
    margin-top:80px;left: 33%;
    transform: translate (-50%,-50%)  ;
    width:400px; padding:20px 30px;
    background:rgb(104,15,15,0.63);
    box-shadow:2px 2px 5px 5px rgba(0,0,0,0.15);border-radius: 10px;"
}
.btn{
    font-size: 20px;
    cursor: pointer;
    width: 100%; height:40px;
    margin-top: 20px;
    padding: 5px;outline: none;color: #fff;
    border:2px solid rgb(255,255,255);
    border-radius: 10px; background:black
}
label{
    font-size:20px;
    color:#fff;
}
</style>
    </head>
  <body>
  <nav class="navbar">
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="services.html">Services</a></li>
<li><a href="aboutus.html">About</a></li>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="register1.php">Register</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</nav>
<div class="container">
<form action="login.php" method="POST"> 
    <div class="title">
<h2>Please Login Here</h2>
<hr>
</div>
<div class="form" >
    
    <div class="input_field">
    <label for="username">Username</label><br>
    <input type="text" name="username" placeholder="Enter Username"><br>
    </div>
    
    <div class="input_field">
    <label for="password">Password</label><br>
    <input type="password" name="password" placeholder="Enter Password"><br>
    </div>

    <div class="input_field">
    <input type="checkbox" name="checkbox">
    </div>
    <div class="input_field">
    <input type="submit" name="submit"  value="Log In" class="btn">
    </div>
</div>
<br>
<a href="#" style="font-size:20px">Forgot Password</a>
</form>
</div>
</body>
</html>

