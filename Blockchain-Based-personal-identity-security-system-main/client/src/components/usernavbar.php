<!DOCTYPE html>
<html>
<head>
<title>View User Request</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@600&family=Poppins:wght@200;300;500;600;800&display=swap');
.outer
{
       width: 1517px;
            height: 717px;
//border: 1px solid;
background-image: url('blockchainwallpaper.jpg');	
background-repeat: no-repeat;
background-size: cover;

}
.innerleft
{
            width: 332px;
             height: 717px;

float: left;

background-image: url('istockphoto-1318361166-612x612.jpg');  
background-repeat: no-repeat;
background-size: cover;

}
.innerright
{
width: 1184px;
            height:717px;
//border: 1px solid;
float: left;	
opacity: 0.5;
background-color: white;

}

ul{
list-style-type: none;
}
ul li{
padding: 12px 25px;
font-weight: bold;
}
ul li a{
text-decoration: none;
font-size: 20px;
font-family: Andalus;
color: white;
}
ul li i{
padding: 7px;
color: white;

}
.nav
{
	height:500px;
	width: 400px;
	//border: 1px solid;
	margin-left: -10px;
	margin-top: 160px;
}
h1
{
   margin-top: 32px;
          font-family: Tw Cen MT Condensed Extra Bold;
          font-size: 50px;
          font-weight: 900;
          color: red;
            text-align: center;
}
label{
  font-size: 25px;
  font-family: Andalus;
  color: darkblue;
  font-weight: 600;
}
button{
  font-size: 18px;
  font-family: Andalus;
  color: darkblue;
  margin-left: 6px;
}
input{
  margin-left: 40px;
  height: 22px;
}
a{
  text-decoration: none;
}
</style>
</head>
<body>
<div class="outer">
<div class="innerleft">
	<div class="nav">
<ul>
	<li><i class="fa-solid fa-house"></i><a href="home.php"><strong>Home</strong></a></li>
  <li><i class="fa-solid fa-street-view"></i>&nbsp<a href="userprofilepage.php"><strong>View Profile</strong></a></li>
  <li><i class="fa-solid fa-file-arrow-up"></i><a href="uploadpage.php"><b>Upload File</b></a></li>
    <li><i class="fa-solid fa-list-check"></i><a href="managesfile&scanQrcode.php"><b>Manage File & Scan QR Code</b></a></li>
    <li><i class="fa-solid fa-eye"></i><a href="viewuserrequest.php"><b>View Files & Make Request</b></a></li>
    <li><i class="fa-solid fa-download"></i><a href="download.php"><b>Download File</b></a></li>
    <li><i class="fa-solid fa-right-from-bracket"></i><a href="home.php"><b>Logout</b></a></li>
</ul>
    </div>

</div>
<div class="innerright">
<h1>Blockchain Based Personal Identity Security System</h1>
<div class="req">
</div>
</div>   	
    </div>
</body>
</html>