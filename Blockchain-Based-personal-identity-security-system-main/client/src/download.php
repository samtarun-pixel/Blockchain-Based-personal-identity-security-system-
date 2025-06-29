<!DOCTYPE html>
<html>
<head>
<title>View Request Status Details</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@600&family=Poppins:wght@200;300;500;600;800&display=swap');
.outer
{
width: 1517px;
            height: 717px;
border: 1px solid;
background-image: url('blockchainwallpaper.jpg'); 
background-repeat: no-repeat;
background-size: cover;

}
.innerleft
{
     width: 300px;
        height: 717px;
        border: 1px solid;
float: left;
//background-image: url('WhatsApp Image 2024-02-09 at 11.12.51 AM.jpeg'); 
//background-repeat: no-repeat;
//background-size: cover;
//background: transparent;
background-image: url('istockphoto-1318361166-612x612.jpg');  
background-repeat: no-repeat;
background-size: cover;

}
.innerright
{
    width: 1215px;
        height: 717px;
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
      width: 300px;
        height: 300px;
        margin: 0px auto;
        margin-top: 160px;
        margin-left:-12px;
        font-family: Andalus;
}
h1
{
  text-align: center;
          color: red;
          margin-top: 32px;
          font-family: Tw Cen MT Condensed Extra Bold;
          font-size: 50px;
          font-weight: 900;
}
.table
{ 
   margin-top: 120px;
   margin-left: 170px;
   //border: 1px solid;
   color: darkblue;
   font-size: 18px;
}
table
{
  border: 1px solid;
   width: 680px;
        height: 40px;
        margin: 0px auto;
       
        //padding: 10 20px;
}
th
{
  padding: 5px;
}
h2{
  text-align: center;
          color: darkblue;
          margin-bottom: 40px;
          font-family: Andalus;
          font-weight: bold;
          font-size: 32px;
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
<div class="table">
  <h2>View Request Status Details</h2>
  <br>
  <table border="stylesheet">
    <th>Id</th>
    <th>Name</th>
    <th>Hash Key</th>
    <th>File Name</th>
    <th>File Key</th>
    <th>Status</th>
    <th>Action</th>
  </table>
</div>
</div>    
    </div>
</body>
</html>