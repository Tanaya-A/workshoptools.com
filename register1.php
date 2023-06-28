<?php

@include 'config.php';

if(isset($_POST["submit"])){

    $name= mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn,$_POST['confirmpassword']);
    
    $select = "SELECT * FROM form1 WHERE email = '$email' && password = '$password' ";
    
    $result = mysqli_query($conn,$select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist!';
    }
    else{

        if($password != $confirmpassword){
            $error[] = 'password not matched!';
        }
        else{
            $insert = "INSERT INTO form1(name,email,address,city,username,password,confirmpassword) 
            VALUES('$name','$email','$address','$city','$username','$password','$confirmpassword')";
            mysqli_query($conn,$insert);
            header("location:login.php");
        }
    }
};
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
    box-shadow:2px 2px 5px 5px rgba(0,0,0,0.15);border-radius: 10px;
}
.btn{
    font-size: 20px;
    cursor: pointer;
    width: 100%; height:40px;
    margin-top: 20px;
    padding: 5px;outline: none;color: white;
    border:2px solid rgb(255,255,255);
    border-radius: 10px; background: black;
}
label{
    font-size:20px;
    color:#fff;
}
.container form .error-msg{
    margin: 10px 0;
    display: block;
    background:white;
    color : rgba(105,15,15,0.85);
    border-radius: 5px;
    font-size: 20px;
    font-weight:800;
    text-align: center;
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
<li><a href="login.php">Login</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</nav>
<div class="container">
<form action="" method="POST">
    <div class="title">
<h2>Please Register Here</h2>
<?php 
if(isset($error)){
    foreach($error as $error){
        echo '<span class="error-msg">'.$error.'</span>';
    };
};
?>
<hr>
</div>
<div class="form" >
    <div class="input_field">
    <label for="name">Name</label><br>
    <input type="text" name="name" placeholder="Enter Name" required><br>
    </div>

    <div class="input_field">
    <label for="email">Email</label><br>
    <input type="email" name="email" placeholder="Enter Email" required><br>
    </div>

    <div class="input_field">
    <label for="address">Address</label><br>
    <input type="text" name="address" placeholder="Enter Address" required><br>
    </div>
    
    <div class="input_field">
    <label for="city">City</label><br>
    <input type="text" name="city" placeholder="Enter City" required><br>
    </div>

    <div class="input_field">
    <label for="username">Username</label><br>
    <input type="text" name="username" placeholder="Enter Username" required><br>
    </div>
    
    <div class="input_field">
    <label for="password">Password</label><br>
    <input type="password" name="password" placeholder="Enter Password" required><br>
    </div>

    <div class="input_field">
    <label for="confirmpassword">Confirm Password</label><br>
    <input type="password" name="confirmpassword" placeholder="Confirm Password" required><br>
    </div>

    <div class="input_field">
    <input type="submit" name="submit" value="Register" class="btn" required>
    </div>
</div>
<br>
<p style="color:#fff;font-size:20px">Already have an account?<a href="login.php" style="color:white;">Login</a></p>
</form>
</div>
</body>
</html>

    
    
    
    

