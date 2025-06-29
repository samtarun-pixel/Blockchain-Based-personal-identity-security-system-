<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
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
             height: 716px;
            //border: 1px solid;
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
   width: 300px;
        height: 300px;
        margin: 0px auto;
        margin-top: 160px;
        margin-left:-12px;
   }

        ul li i{
      padding: 7px;
      color: white;
}
        h1{
             text-align: center;
          color: red;
          margin-top: 32px;
          font-family: Tw Cen MT Condensed Extra Bold;
          font-size: 50px;
          font-weight: 900;
        } 
    </style>
</head>
<body>
<div class="outer">
    <div class="leftbox">
        <div class="nav">
            <ul>
                <li><i class="fa-solid fa-house"></i>&nbsp<a href="">HOME</a></li>
                <li><i class="fa-solid fa-file-arrow-up"></i>&nbsp<a href="">ADMIN</a></li>
                <li id="user"><i class="fa-solid fa-users"></i>&nbsp<a href="userloginpage.php">USER</a></li>
                <li id="logout"><i class="fa-solid fa-right-from-bracket"></i>&nbsp<a href="">LOGOUT</a></li>
            </ul>
        </div>
    </div>
    <div class="rightbox">
        <h1 id="welcomeText">Blockchain Based Personal Identity Security System</h1> 
    </div>
</div>

<script>
    document.getElementById("user").addEventListener("mouseover", function() {
        document.getElementById("welcomeText").innerText = "Welcome To Blockchain Based Personal Identity Security System";
    });

    document.getElementById("user").addEventListener("mouseout", function() {
        document.getElementById("welcomeText").innerText = "Blockchain Based Personal Identity Security System";
    });
</script>

</body>
</html>
