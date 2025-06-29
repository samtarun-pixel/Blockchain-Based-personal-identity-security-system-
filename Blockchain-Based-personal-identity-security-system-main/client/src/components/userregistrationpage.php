<?php require 'registrationinsert.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>
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
        button{
            padding: 5px 20px;
            border-radius: 5px;
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
        .nav{
            width: 150px;
            height: 300px;
            margin-top: 120px;
            margin-left:50px;
        }
         #output {
        background-color: #f0f0f0;
        padding: 10px;
        margin-top: 20px;
    </style>
</head>
<body>
    <div class="outer">
        <div class="leftbox">
            <div class="nav">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="">Admin</a></li>
                    <li><a href="userloginpage.php">User</a></li>
                    <li><a href="home.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="rightbox">
            <h1>Blockchain Based Personal Identity Security System</h1>
            <h2>User Registration Form</h2>
            <div class="inner">
                    <form method="post" action="userloginpage.php">
                         <label for="name">Username:</label>
    <input type="text" id="name" name="username" required><br>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="gender">Gender:</label>
    <input type="radio" id="gender" name="gender" value="Male"> Male
    <input type="radio" id="gender" name="gender" value="Female"> Female<br>

    <label for="mobileNumber">Mobile Number:</label>
    <input type="text" id="mobileNumber" name="mobileNumber" required><br>

    <input type="submit" name="submit" value="Submit">
    <button><a href="userloginpage.php">Back</a></button>
</form>
            </div>
        </div>
    </div>
</body>
</html>
