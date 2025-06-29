<?php require 'select.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verify Username</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@600&family=Poppins:wght@200;300;500;600;800&display=swap');
        .outer{
            width: 1330px;
            height: 600px;
            border: 1px solid;
            background-image: url('blockchainwallpaper.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .leftbox{
            width: 300px;
            border: 1px solid;
            height: 600px;
            float: left;
        }   
        .rightbox{
            width: 1025px;
            height:600px;
            border: 1px solid;
            float: left;
            background-color: white;
            opacity: 0.5;
        }
        .leftbox ul{
            list-style-type: none;
        }
        .leftbox ul li{
            padding: 15px 30px;
            color: white;
            font-size: 20px;
        }
        .leftbox ul li a{
            text-decoration: none;
            color: white;
        }
        .inner{
            width: 500px;
            height: 450px;
            margin-top: 30px ;
            margin-left: 200px;
        }
        button a{
            text-decoration: none;
        }
        h1{
            color: black;
            text-align: center;
        }
        h2{
            color: black;
            text-align: center;
        }
        .nav {
            height:500px;
            width: 400px;
            margin-left: -12px;
            margin-top: 160px;
        }
        .verify{
            width: 400px;
            height: 100px;
            margin: 0px auto;
        }
        button{
            padding: 0px 10px;
            margin-left: 10px;
        }
        button a{
            text-decoration: none;
            color:black;
        }
    </style>
</head>
<body>
    <div class="outer">
        <div class="leftbox">
            <div class="nav">
                <ul>
                    <li><i class="fa-solid fa-house"></i><a href="home.php"><b>Home</b></a></li>
                    <li><i class="fa-solid fa-user-tie"></i>&nbsp<a href="#"><b>Admin</b></a></li>
                    <li><i class="fa-solid fa-users"></i>&nbsp<a href="userloginpage.php"><b>Users</b></a></li>
                    <li><i class="fa-solid fa-right-from-bracket"></i><a href="home.php"><b>Logout</b></a></li>
                </ul>
            </div>
        </div>
        <div class="rightbox">
            <h1>Blockchain Based Personal Identity Security System</h1>
            <h2>Verify Username</h2>
            <div class="inner">
                <div class="verify">
                    <form id="verifyForm" method="POST" action="#"> <!-- Update the action attribute -->
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username">
                        <br><br>
                        <button type="submit">Verify</button>
                        <button><a href="userregistrationpage.php">Other Details</a></button>
                    </form>
                    <div id="result"><?php echo isset($resultMessage) ? $resultMessage : '';?></div>
                </div>
            </div>
        </div>
    </div>
    <script src="verify.js"></script>
</body>
</html>
