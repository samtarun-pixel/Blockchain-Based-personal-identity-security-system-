<?php require 'profile.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
	 <style>
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
    		width: 332px;
    		//border: 1px solid;
    		height: 717px;
    		float: left;
    	}	
    	.rightbox{
    		width: 1183px;
    		height:716px;
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
               font-size: 20px;
  font-family: Andalus;
  color: darkblue;
  font-weight: 600;
    	}
    	button{
    		padding: 5px 20px;
    		border-radius: 5px;
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
          MARGIN-TOP: 55PX;
          font-family: Andalus;
          font-weight: bold;
          FONT-SIZE: 32PX;  
    	}
    	.nav
            {
   height:500px;
   width: 400px;
   //border: 1px solid;
    margin-left: -22px;
   margin-top: 160px;
   }
    </style>
</head>
<body>
<div class="outer">
	<div class="leftbox">
		<div class="nav">
<ul>
	<li><i class="fa-solid fa-house"></i>&nbsp<a href="home.php"><strong>Home</strong></a></li>
  <li><i class="fa-solid fa-street-view"></i>&nbsp<a href="userprofilepage.php"><strong>View Profile</strong></a></li>
  <li><i class="fa-solid fa-file-arrow-up"></i>&nbsp<a href="uploadpage.php"><b>Upload File</b></a></li>
    <li><i class="fa-solid fa-list-check"></i>&nbsp<a href="managesfile&scanQrcode.php"><b>Manage File & Scan QR Code</b></a></li>
    <li><i class="fa-solid fa-eye"></i>&nbsp<a href="viewuserrequest.php"><b>View Files & Make Request</b></a></li>
    <li><i class="fa-solid fa-download"></i>&nbsp<a href="download.php"><b>Download File</b></a></li>
    <li><i class="fa-solid fa-right-from-bracket"></i>&nbsp<a href="home.php"><b>Logout</b></a></li>
</ul>
    </div>
	</div>
	<div class="rightbox">
		<h1>Blockchain Based Personal Identity Security System</h1> 
         <h2>Profile</h2>
		<div class="inner">
		 	<table>
				<tr>
					<td>Username:</td>
                    <td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password:</td>
                    <td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Dob:</td>
                    <td><input type="date" name="dob"></td>
				</tr>
				  <tr>
                <td>E-mail:</td>
                <td><input type="email" name="email"></td>
                </tr>
                <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="male">Male</td>
                <td><input type="radio" name="gender" value="female">Female</td>
                <td><input type="radio" name="gender" value="other">Other</td>
            </tr>
             <tr>
                <td>Mobile Number:</td>
                <td><input type="tel" name="mobileNumber"></td>
            </tr>
            </table>
		 	</form>
		</div>
	</div>
</div>
</body>
</html>