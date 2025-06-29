<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Registration</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <style type="text/css">
    /* Your CSS styles here */
    .outer{
      width: 1517px;
      height: 717px;
      // border: 1px solid;
      background-image: url('blockchainwallpaper.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    }
    .left{
      width: 325px;
      height: 716px;
      // border: 1px solid;
      float: left ;
    }
    .right{
      width: 1190px;
      height: 716px;
      border: 1px solid;
      float: left;
      background-color: white;
      opacity: 0.5;
    }
    .nav{
      width: 300px;
      height: 300px;
      margin: 0px auto;
      margin-top: 160px;
      margin-left:-12px;
    }
    .nav ul li{
      list-style-type: none;
      padding: 10px;
      font-size: 20px;
      font-weight: bold;
      font-family: Andalus;
    }
    a{
      text-decoration: none;
      color: white;
    }
    .table{
      width: 670px;
      height: 200px;
      margin: 0px auto;
      margin-top: 170px;
    }
    table{
      border: 1px solid;
      margin: 0px auto;
    }
    th{
      font-size: 18px;
      color: darkblue;
      font-family: Andalus;
    }
    h1{
      text-align: center;
      color: red;
      margin-top: 32px;
      font-family: Tw Cen MT Condensed Extra Bold;
      font-size: 50px;
      font-weight: 900;
    }
    h2{
      text-align: center;
      color: darkblue;
      margin-bottom: 40px;
      font-family: Andalus;
      font-weight: bold;
      font-size: 32px;
    }
    ul li i{
      padding: 6px;
      color: white;
      text-decoration: none;
      font-size: 20px;
      font-family: Andalus;
    }
  </style>
</head>
<body>
  <div class="outer">
    <div class="left">
      <div class="nav">
        <ul> 
          <li><i class="fa-solid fa-house"></i><a href="home.php">Home</a></li>
          <li><i class="fa-solid fa-street-view"></i>&nbsp<a href="userprofilepage.php"><strong>View Profile</strong></a></li>
          <li><i class="fa-solid fa-cloud-arrow-up"></i><a href="uploadpage.php">Upload File</a></li>
          <li><i class="fa-solid fa-bars"></i><a href="managesfile&scanQrcode.php">Manage File & Scan QR Code</a></li>
          <li><i class="fa-sharp fa-solid fa-eye"></i><a href="viewuserrequest.php">View File & Make Request</a></li>
          <li><i class="fa-solid fa-download"></i><a href="download.php">Download File</a></li>
          <li><i class="fa-solid fa-right-from-bracket"></i><a href="home.php">Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="right">
      <h1>Blockchain Based Personal Identity Security System</h1>
      <div class="table">
        <h2>Search File Search With K</h2>
        <br>
        <table border="stylesheet">
          <tr>
            <th>ID</th>
            <th>Name</th>   
            <th>Hash Key</th>
            <th>File Name</th>
            <th>Date</th>   
            <th>View</th> 
            <th>Action</th> 
          </tr>
          <tr>
            <td>....</td>
            <td>.......</td>
            <td>.......</td>
            <td>.......</td>
            <td>.......</td>
            <td>.......</td>
            <td>.......</td>
          </tr> 
          <tr>
            <td>....</td>
            <td>.......</td>
            <td>.......</td>
            <td>.......</td>
            <td>.......</td>
            <td>.......</td>
            <td>.......</td>
          </tr>         
        </table>
      </div>
    </div>  
  </div>s
</body> 
</html>
