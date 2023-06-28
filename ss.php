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
            <img src="data:image/jpeg;base64,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"
                alt="" style="height: 20rem;width: 20rem;">
            <h3 style="font-size: 23px;">Chisel</h3>
            <hr>
            <!--<div class="count" style="font-size: 18px;">Qty : 20</div>-->
            <form><button style="border: 1px solid #fff ;border-radius: 10px 20px;padding: 10px 10px;
                background-color: black;color:#fff;
                    text-decoration: none; transform: 0.06s ease;top: 85%; left: 30%;
                    ;font-size:20px;"><a>ISSUE</a></button></form>
        </div>
        <div class="product" data-name="p-2" style="text-align: center;
            padding: 2rem 2rem;
            background: #fff;
            box-shadow: 0.5rem 1rem rgba(0,0,0,.1);border: 1px solid black">
            <img src="data:image/jpeg;base64,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"
                alt="" style="height: 20rem;width:20rem;">
            <h3 style="font-size: 23px;">Wood Plane</h3>
            <hr>
            <!--<div class="count" style="font-size: 16px;">Qty : 5</div>-->
            <div class="center"><button id="show-ISSUE" style="cursor: pointer;border: 1px solid #fff ;border-radius: 10px 20px;padding: 10px 10px;
                    background-color: black;color: #fff;
                        text-decoration: none; transform: 0.06s ease;top: 85%; left: 30%;
                        ;font-size:20px;">ISSUE</button></div>
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
            border:none;border-radius: 10px;background:black">SUBMIT</button>

                    </div>
                </div>
            </div>

        </div>


        <div class="product" data-name="p-3" style="text-align: center;
            padding: 2rem 2rem;
            background: #fff;
            box-shadow: 0.5rem 1rem rgba(0,0,0,.1);border: 1px solid black;">
            <img src="data:image/jpeg;base64,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"
                alt="" style="height: 20rem;width: 20rem;">
            <h3 style="font-size: 23px;">Mallet</h3>
            <hr>
            <!---- <div class="count" style="font-size: 16px;">Qty : 20</div>-->
            <form><button style="border: 1px solid #fff;border-radius:10px 20px;
                padding: 10px 10px;background-color:black;color: #fff;
                    text-decoration: none; transform: 0.06s ease;top: 85%; left: 30%;
                    ;font-size:20px;"><a>ISSUE</a></button></form>
        </div>
        <div class="product" data-name="p-4" style="text-align: center;
            padding: 2rem 2rem;
            background: #fff;
            box-shadow: 0.5rem 1rem rgba(0,0,0,.1);border: 1px solid black;">
            <img src="data:image/jpeg;base64,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"
                alt="" style="height: 20rem;width: 20rem;">
            <h3 style="font-size: 23px;">Handsaw</h3>
            <hr>
            <!--<div class="count" style="font-size: 16px;"> Qty : 10</div>-->
            <form></form><button style="border: 1px solid #fff;border-radius: 10px 20px;
                padding: 10px 10px;background-color:black;color: #fff;
                    text-decoration: none; transform: 0.06s ease;top: 85%; left: 30%;
                    ;font-size:20px;"><a>ISSUE</a></button></form>
        </div>
        <div class="product" data-name="p-5" style="text-align: center;
            padding: 2rem 2rem;
            background: #fff;
            box-shadow: 0.5rem 1 rem rgba(0,0,0,.1);border: 1px solid black;">
            <img src="data:image/jpeg;base64,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"
                alt="" style="height: 20rem; width: 20rem;">
            <h3 style="font-size: 23px;"><a>Metal Cutter</a></h3>
            <hr>
            <!----<div class="count" style="font-size: 16px;">Qty : 15</div>-->
            <form><button style="border: 1px solid #fff ;border-radius: 10px 20px;padding: 10px 10px;
                color: #fff;
                    text-decoration: none; transform: 0.06s ease;top: 85%; left: 30%;
                    ;font-size:20px;background-color:black;color: #fff;">ISSUE</button></form>
        </div>
        <div class="product" data-name="p-6" style="text-align: center;
            padding: 2rem 2rem;
            background: #fff;
            box-shadow: 0.5rem 1rem rgba(0,0,0,.1);border: 1px solid black;">
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGCBURERMRExMRERETERMRFxMXGRkVGRIXFxMYGBgTGRgaHysjGiAoHxcXJTUkKywuMjUyGSE3PDcxOysxMi4BCwsLDw4PHRERHTIoHygxMTEzMzExMTExMTExOzExMTExMTEzMTExMTExMjMxMTExMTExMTExMTExMTExMTExMf/AABEIALcBEwMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABQEDBAYHAgj/xABJEAACAQIDBAUHBwkFCQAAAAAAAQIDEQQSIQUGMUETUWFxsQcUIoGRodEyQlJUgpPSFRYjM0NTcpLBF2Ky8PE0RGN0g6K0wuH/xAAbAQEAAgMBAQAAAAAAAAAAAAAAAQQCBQYDB//EADMRAAIBAgMFBgUDBQAAAAAAAAABAgMRBCExBRJBUaETYXGBkbEiMsHR4RQz8AYjUmLS/9oADAMBAAIRAxEAPwDswAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABFbb2xDC9GpQq1J1pOEKdON3OSi5NXbSXoxk9Xwi7XsG7AlQcy3u3g2kpKEVTwVOpDPFpKdS17NOU9E+6PNGubKpVJVJzrYvETqOLabqzbk0721lwsmrcNewi5NjuB5btryOQu31ib+9f8A6GJtDC05KUnUlKWV20nG6V3lbkkrPVfaIuLG8Yvyh4WNWdClGtiKkOcITlGT5qOWLlK3Wo27THxm/NaOsdnV5LW7c4xdraWhPLJu9tLc/bzXYlelhp4mkoUZSVaE6akvRcZw1hGTi8uq42fF6M2L8t13BxjSw6i01lcq0uK6qeGXiGEb/sHbVTExm5U+hqQm4Spt5tLvJUjJcVJL2prW13IV51JRsmouzs2r620bV9V7DVd3956WKxijSy5nhalSaTu45K1OEYTV/RledTTTR35m0PFo5fF1OzrThUrSXdfKzs+juvLMsxV1dJFac6mWKlJZkld2td8+4vRqyS5370zHeLRG7R2xKFWhTiouNatOk78U1h6lVNeunb1lb9dGDclWm3bx4d9reRl2TfBErmnmzZpfw39H2FOlqXvdd3H3HMoeVabSfm1PVJ/LfP7JR+VOf1en94/wl+eFx8tZVMv94f8AXuY3guXo/sdQniJtWWhawmJqxjaeWUs0tYprTM8q77Wv23OZy8qk/q9P7x/hNunt+o+ilTw7q06tKlV6TpKMFHpFezU5qTsrO6XPTXQqYh43DSUqlSavkruDWXnb6mUYxlkkupssMfZ+lHTrXL1GdCSautU+ZqGG2nOcpKpRdLK3aTnRlGava8ck3Lt1SJbZGLtPo3wle3ZZX99j32ZterKt2Nd3TyTyvfk93LPTx420VMP8O9HgTgAOoKYAAAAAAAAAAAAAAAAAAAABRmvYzbtanVlTWErTgvnQUpO30ndRjbuk/wChsQAIT8vP6rjful+M13b+2W68KjpYuPQ0ZVOhyJTzyU1TqxSbfBVY6rm+o30jNq7PzyjUgodLFZMz0eS93FS77O3YYu5krHGN/t4Z1pUHkr0sqqq1VyvK/R8LpcLe81KttCVm02npZrlqdD8reGqzqYdSo1clGnUbqZXKF6ko+jmWnCmnx5nP5UFZ6BPIhnuW0p/SxP3kPwFmvtCVuNb7U4yXB8lBeJ46D/NkeJUf68vYTcixSji552oWjO8JqV1HI406l5KXzWrtp8U0ra2Mme0MY1/tkpLtxr8HUTLGDo3ztcbpLlql1+svNVEtVdfxv+sQLG1eSvE0ZY6KpQqRrLCV+nqSm5qrJ1Kd2tXzV76cefE6h0pzzycYCUMVKWenUhDBzgsrfoOpWpztqlzVTXXsZvhwu2Uni2lokufjxz46cFlwNrhI/BmXukInbE/02B/56X/hYkzzExeCdSpQneyo1ZVeF73w9WkkvXUv6jV7qs1fgWZRVvT3OBxqaLuK5+03heTCqtPOqX3cviP7M6v1qj93P4neva+Cv+50l9jU/p6v+Jo+c6dWdPzfZ0pLZDl5hhdcZKUallTVujyxd43v67kV/ZlV+tUvu5fiN1jsepGFCnDEZIUaFKj+opVHPo45c2ad3G6S0XCxptq42hX3OynpfTeWtu5voWKFCcb7y9iA2v0HSTut3XLPL9ZKUZXza57Rdn1m54etJVqCk0qjdLNlvbM2lK19baviYuGwsoSlKpVdW7bjF0qVOMNbrWMczfey7sfD1auOWaEfN4wjUz39JzUr2tfhouXUa7CQc8RBLOzXfxWl0vF/gtySSlJ8n/Psb6ADvDSAAAAAAAAAAAAAAAAAAAAAAAAAAAHlq+nIi8Ru5hKknOeGoSk+LyJN+wlgAQi3VwX1Wh/KJ7q4GSs8LQa/hXiTYAOdbY8mNKTXm0oUYW1pTjKpd9fSZ8y148bmu7R8m1enFzbouKyr9HKTk80kvkzjFc/pI7OeJxTVmrp8jCcW4vdyfDxMouzOa7t7KhgV0cm5V69pScYZYRhTWWMVlVlbM229ZOUmTNzZMfsyFWDh6VNv59OynHubT8DkHlCwmO2dNRjjcROnUTcJt2enGMrK1zma2wq9SW9vxb46rwskskllYvwxkIqyi+hviZzTF7q7Rq1ZTnNSlKWs1XlGPeop3S6kkXNwd8as8RDC4qfSxqvJTqtJShU+bGTVsyk9Ou7R0qETXuWI2XVcbRbaWbV8s9NLZ6+HK1/X+3iY3fAxcLTlCnCEpOpKMIxc3xm1FJyffxEqtjJlAj9o02ldcjWxak8y1FXyM/D0pVPkxzdyuZUNl1H823foT+z6cYU4KPDLH16cTJOtpbAoJfHJt91kvb6mtljpX+FI1+jsWT+U0l7SWweEjSVorV8XzZlA2eGwNDD/ALcc+erK1StOp8zAALZ5AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA5t5dYvzfBys7LF2lK2kYunLi+WqXsOklqvSjOLjOMZxfGMkpJ96YB8ybq4WVXaOGUFe2LpVG1yjTmqkn2WjGTO5QJ6eyaLaapU4uMXBSjFRai2m4prldLTsIirh1CpKHGz07uKOU/qGhUc41Xbd+Xvvm88vTN9TYYOUUmlqUqKCVr+kYWJhddZkTjdss1InOXuXYZGw7v1c1CHXH9G/suy91iSIDdarbpKfdNeD8ET59DwNbtsPCfG2fisn1NPXju1JIAAtnkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACC2xC1W/0o39mhOkXt2HoqXVp7TV7Zpdpg521VpemvS574aVqiXPIiahZmXqhamcJxNrE97Gq5MRHqleD9fD3pG2GkdJknGXOLT5cmbrF3VzstgVd6hKD4Po/wAplHHRtJS5r2PQAN6UQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAYu0aeanJdl/Zr/QySxiK6grtrsXW+o86qg4NVMotNO+luPQmLd1bU1tSujzJf51L9CiufEuSwPcfN6VGdRXgr+BuHOKZE4nh/qbhs+V6VOXXTj/hRrNfCdxMbGxUYwjTk0nHRdVuWpv8AYFenCrKnJ2bStfmr5dTxxi34Jx4EuChU601gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANR3o3uoYVtdNfJJ06ipuM5U5KztKN82iavZNmFSe5FySbtwWpMVd2vYzntipdqVOdFp6qUcytdJPNFuLvmXPwZ7p4mc+NRrl1eBpWE3kwM5dP51iZNJwtNVmtcr1jk9JrJHXUyJb7YGOnTpc9adX8ByuMrY1yvSjVtnk4vm7fKl+ObL8FTta8b+X1Nqp1KdRNqv0iTcW4vNZrjFu/EpJU1zb9nwNH2ZvRsvDQlClXjGMpyqNWqy1f2eGhf/AD9wH1hPup1fwFKtHFSbtRk1zcJt9W7Hr8HCeXil7G4qUeSuVc/7pr2zd8MJUlTp0a96tWTjGLp1I5rK+maKXAlniZfSKlSm6WVWO63w3EsvP7ExjvfLn5l2VRdRZqTIHeXeilg5whV6SVSonKMYRcm4riyHxW/+Hiv1WKf/AE1HxkRDA4irFSjBtPksjNShF5tept+yNv5cYsLJStOOaMm9Hq43iu9W9T6jckcIw2+2FWIjVWGam561Kk0+jUpXeWKlK2rbslzZ27ZuMhXpwrUpZqc1mjLVXXczt9nxnCnuyi0la287vv4vK+lyhi3Tck4eZlAAvlUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHGfLDgaNKrbo3ac51ZOLyyc52k5N81dvTt7DsxxLy1zl5/OD+T5rQqJdvSVIMA0/CYmEaN4xSak1fLDN69NS1+V5R4Tku6nSfijHoP8AQv8AifgjHhVhbK43evpXd1x0S4WIsCT/ADiqLhWrLup0l4HmW8VV/wC8Yn2QXgQkuJQWFyYltio5QrdLXnOjLNByak4Sa1aVmuBflvhjX+3xXqUV4QRDYXg1rfirc3a+V9S0KOlUfzX7TynQpVHecE33pMyU5LRtEhiNo1K+atVnXnOnHLeVRxkoNrs4ZpLQwJ1oy1cHL+KbfiivpQpzUlrKaj3LLmS/7UY56RjGKtFWXdkYt31M7CV4J6Yei3/ezS8Gj6h2Dh408NRhCKjGNKFkuCvFM+XcHUfoQXyZSV+3U+qdnq1Kmv8Ahw/woyBkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHN/KzurLE1I4uE7NUfN5U7XbtUzwnHr4yTXd2nSCP2pSjU9GWqtw73/8APmnEUXRTpTbi1Ju7Vl7yOS9LRxavxura+B9G1d36MtXH3v4lp7sYd/M0738QD57eEj+/oL7T+BRYSP76m+67Pob81sL+797+JVbs4Zfsve/iQD57jh2tFmlrdSjmXFW5HpYWb+ZXf3jPoRbtYb90vf8S5Dd7Dr9jH2Eg+e54Ko4xj0dZLNOTeSba9FJcr82eqOxakuEK/8AI14o+hPyFQ/cw9iPcNj0VwpU/wCVAHH9zdy5V8TSVaXRUYtS1azSf0dPX1fHv9OFkkuCSS9RE0MJCDvGMV3JEwgCoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABh4ta37ACGCymLAAkoVAIYKoXAFwUbABIKmfDgu4Akg9AAAAAAAAAAAAAAA//9k="
                alt="" style="height: 20rem;width: 20rem;">
            <h3 style="font-size: 23px;"><a>Electric Drill</a></h3>
            <hr>
            <form><button style="border: 1px solid #fff ;border-radius: 10px 20px;padding: 10px 10px;
                color: #fff;
                    text-decoration: none; transform: 0.06s ease;top: 85%; left: 30%;
                    ;font-size:20px;background-color:black ;">ISSUE</button></form>
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
    </script>
</body>

</html>