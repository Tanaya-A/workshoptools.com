<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en"
    style="font-family:Nunito;margin:0;padding: 0;box-sizing: border-box;outline: none;border: none;transition: all .2s linear;text-decoration: none;text-transform: capitalize;font-size: 62.5%;">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <style>
        .navbar {
            background-color: #f2f2f2;
            padding: 10px;
            border-radius: 40px;
            margin-top: 10px;
        }

        .navbar li {
            margin-right: 10px;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        ul {
            list-style-type: none;
            margin-top: 25px;
            word-spacing: 20px;
        }

        .navbar li a {
            font-family: Tahoma;
            color: black;
            border: 0.5px solid transparent;
            transition: 0.6s ease;
            font-size: 20px;
            text-decoration: none;
            padding: 5px 25px;
            text-align: center;
            border-radius: 40px
        }

        .navbar li a:hover {
            background-color: rgb(108, 15, 15, 0.85);
            color: #fff;
            border-radius: 40px
        }

        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.63), rgba(0, 0, 0, 0.616)), url("tools.webp");
            background-size: cover;
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
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="container" style="max-width: 1200px;margin:0 auto;padding: 3rem 2rem">
        <h3 class="title" style="font-size:3.5rem;text-align:center;color: #fff;
            margin-bottom: 3rem;text-transform: uppercase;">WORKSHOP TOOLS</h3>
    </div>
    <div class="container-product" style="display: grid;
        grid-template-columns: repeat(auto-fit,minmax(25rem,1fr));gap: 5rem;">
        <div class="product" data-name="p-1" style="text-align: center;
            padding: 2rem 2rem;
            background: rgba(255,255,255);
            box-shadow: 0.5rem 1rem rgba(0,0,0,.1);border: 1px solid black;">
            <img src="Chisel.jpg" alt="" style="height: 20rem;width: 20rem;">
            <h3 style="font-size: 23px;">Chisel</h3>
            <hr>
            <!--<div class="count" style="font-size: 18px;">Qty : 20</div>-->
            <form><button style="border: 1px solid #fff ;border-radius: 10px 20px;padding: 10px 10px;
                background-color: black;color:#fff;
                    text-decoration: none; transform: 0.06s ease;top: 85%; left: 30%;
                    ;font-size:20px;" onclick="show()"><a>ISSUE</a></button></form>
        </div>
        <div class="product" data-name="p-2"
            style="text-align: center;padding: 2rem 2rem;background: #fff;box-shadow: 0.5rem 1rem rgba(0,0,0,.1);border: 1px solid black">
            <img src="wood_plane.jpg" alt="" style="height: 20rem;width:20rem;">
            <h3 style="font-size: 23px;">Wood Plane</h3>
            <hr>
            <!--<div class="count" style="font-size: 16px;">Qty : 5</div>-->
            <div class="center"><button id="show-ISSUE"
                    style="cursor: pointer;border: 1px solid #fff ;border-radius: 10px 20px;padding: 10px 10px;background-color: black;color: #fff; text-decoration: none; transform: 0.06s ease;top: 85%; left: 30% ;font-size:20px;"
                    onclick="show()">ISSUE</button></div>

            <div class="popup" id="yo"
                style="position: absolute;top:30%;left:40%;transform: translate (-50%,-50%)  ;width:200px; padding:20px 30px;background:#f7f5f5;box-shadow:2px 2px 5px 5px rgba(0,0,0,0.15);border-radius: 10px;display: none;">
                <div class="close-btn"
                    style="Position: absolute;top:10px; right:10px;width:15px;height:15px;background:#888;color:#eee;text-align:center;line-height:15px;border-radius:15px;cursor: pointer;"
                    onclick="go()">&times;
                </div>

                <div class="form">
                    <h2 style="text-align: center;color: #222;margin: 10px 0px 20px;
        font-size: 25px;">ISSUE</h2>
                    <div class="form-element" style="margin: 15px 0px;">
                        <label for="quantity" style="font-size: 14px;color:#222;">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" required style="margin-top: 5px;display: block;width: 100%;padding: 10px;outline: none;
            border:1px solid #aaa;border-radius: 5px;">
                    </div>
                    <div class="form-element">
                        <label for="date" style="font-size: 14px;color:#222;">Date needed:</label>
                        <input type="date" id="date" name="date" required style="margin-top: 5px;display: block;width: 100%;padding: 10px;outline: none;
            border:1px solid #aaa;border-radius: 5px;">
                    </div>
                    <div class="form-element">
                        <button style="cursor: pointer;width: 100%; height:40px;margin-top: 20px;
            padding: 10px;outline: none;color: #fff;
            border:none;border-radius: 10px;background:black" onclick="go()">SUBMIT</button>

                    </div>
                </div>
            </div>

        </div>


        <div class="product" data-name="p-3"
            style="text-align: center;padding: 2rem 2rem;background: #fff;box-shadow: 0.5rem 1rem rgba(0,0,0,.1);border: 1px solid black;">
            <img src="mallet.jpg" alt="" style="height: 20rem;width: 20rem;">
            <h3 style="font-size: 23px;">Mallet</h3>
            <hr>
            <!---- <div class="count" style="font-size: 16px;">Qty : 20</div>-->
            <form><button style="border: 1px solid #fff;border-radius:10px 20px;
                padding: 10px 10px;background-color:black;color: #fff;
                    text-decoration: none; transform: 0.06s ease;top: 85%; left: 30%;
                    ;font-size:20px;" onclick="show()"><a>ISSUE</a></button></form>
        </div>
        <div class="product" data-name="p-4" style="text-align: center;
            padding: 2rem 2rem;
            background: #fff;
            box-shadow: 0.5rem 1rem rgba(0,0,0,.1);border: 1px solid black;">
            <img src="handsaw.jpg" alt="" style="height: 20rem;width: 20rem;">
            <h3 style="font-size: 23px;">Handsaw</h3>
            <hr>
            <!--<div class="count" style="font-size: 16px;"> Qty : 10</div>-->
            <form></form><button style="border: 1px solid #fff;border-radius: 10px 20px;
                padding: 10px 10px;background-color:black;color: #fff;
                    text-decoration: none; transform: 0.06s ease;top: 85%; left: 30%;
                    ;font-size:20px;" onclick="show()"><a>ISSUE</a></button></form>
        </div>
        <div class="product" data-name="p-5" style="text-align: center;
            padding: 2rem 2rem;
            background: #fff;
            box-shadow: 0.5rem 1 rem rgba(0,0,0,.1);border: 1px solid black;">
            <img src="cutter.jpg" alt="" style="height: 20rem; width: 20rem;">
            <h3 style="font-size: 23px;"><a>Metal Cutter</a></h3>
            <hr>
            <!----<div class="count" style="font-size: 16px;">Qty : 15</div>-->
            <form><button style="border: 1px solid #fff ;border-radius: 10px 20px;padding: 10px 10px;
                color: #fff;
                    text-decoration: none; transform: 0.06s ease;top: 85%; left: 30%;
                    ;font-size:20px;background-color:black;color: #fff;" onclick="show()">ISSUE</button></form>
        </div>
        <div class="product" data-name="p-6" style="text-align: center;
            padding: 2rem 2rem;
            background: #fff;
            box-shadow: 0.5rem 1rem rgba(0,0,0,.1);border: 1px solid black;">
            <img src="drill.jpg" alt="" style="height: 20rem;width: 20rem;">
            <h3 style="font-size: 23px;"><a>Electric Drill</a></h3>
            <hr>
            <form><button style="border: 1px solid #fff ;border-radius: 10px 20px;padding: 10px 10px;
                color: #fff;
                    text-decoration: none; transform: 0.06s ease;top: 85%; left: 30%;
                    ;font-size:20px;background-color:black ;" onclick="show()">ISSUE</button></form>
            <!-- <div class="count" style="font-size: 16px;"> Qty : 10</div>-->
        </div>
    </div>
    <script>
        document.querySelector("#show-ISSUE").addEventListener("click", function () {
            document.querySelector(".popup").classList.add("active");
        });
        document.querySelector(".popup .close-btn").addEventListener("click", function () {
            document.querySelector(".popup").classList.remove("active");
        });
        function show() {
            document.getElementById("yo").style.display = "block"
        }
        function go() {
            document.getElementById("yo").style.display = "none"
        }
    </script>
</body>

</html>