<?php include('inserthash.php');?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>User Registration Page</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
   <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@600&family=Poppins:wght@200;300;500;600;800&display=swap');
      .outer{
         width: 1517px;
            height: 717px;
            //border: 1px solid;
             background-image: url('blockchainwallpaper.jpg');
             background-repeat: no-repeat;
             background-size: cover;
      }
      .leftbox{
         width: 300px;
            //border: 1px solid;
            height: 716px;
            float: left;
      }
      .rightbox{
            width: 1215px;
            height:717px;
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
        .nav
            {
   height:500px;
   width: 400px;
   //border: 1px solid;
   margin-left: -12px;
   margin-top: 160px;
   }

        ul li i{
      padding: 7px;
      color: white;
      font-family: Andalus;
}
h1{
    margin-top: 32px;
          font-family: Tw Cen MT Condensed Extra Bold;
          font-size: 50px;
          font-weight: 900;
          color: red;
            text-align: center;
}
h2{
          text-align: center;
          color: darkblue;
          margin-bottom: 40px;
          font-family: Andalus;
          font-weight: bold;
          font-size: 32px;
  }
.box{
        width: 500px;
        height: 450px;
        margin-top: 30px ;
        margin-left: 200px;
               font-size: 20px;
  font-family: Andalus;
  color: darkblue;
  font-weight: 600;
} 
    button{
        padding: 5px 20px;
        border-radius: 5px;
            font-size: 18px;
            font-family: Andalus;
            color: darkblue;

      }
      button a{
        text-decoration: none;

     }
      #output {
      background-color: #f0f0f0;
      padding: 10px;
      margin-top: 20px;
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
      <h1> Blockchain Based Personal Identity Security System</h1>
      <h2>User Registration</h2>
      <div class="box" id="loginForm">
       <form id="userForm" action="#">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br><br>
      <button type="submit">Generate Hash</button>
      <button><a href="verify.php">Verify Your username</a></button>
    </form>
    <div id="output">
      <p>User Data: <span id="userData"></span></p>
      <p>Salt: <span id="salt"></span></p>
      <p>SHA-256 Hash: <span id="sha256Hash"></span></p>
    </div>
  </div>
   </div>
</div>
<script src="hashscript.js"></script>
</body>
</html>
