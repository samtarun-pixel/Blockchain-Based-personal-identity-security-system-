<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

		<style type="text/css">
			.outer{
				width: 1517px;
				height: 717px;
				//border: 1px solid;
				background-image: url('blockchainwallpaper.jpg');
				background-repeat: no-repeat;
				background-size: cover;

			}
			.left{
				width: 325px;
				height: 717px;
				//border: 1px solid;
				float: left ;
			}

			.right{
				width: 1190px;
				height: 715px;
				border: 1px solid;
				float: left;
				background-color: white;
				opacity: 0.5;
			}
			.nav{
				 height:500px;
   width: 400px;
   //border: 1px solid;
   margin-left: -12px;
   margin-top: 160px; 
}
			.nav ul li{
				list-style-type: none;
				text-decoration: none;
font-size: 20px;
font-family: Andalus;
color: white;
				
			}
			a{
				text-decoration: none;
			    color: white;

			}
			.table{
				width: 680px;
				height: 250px;
				margin: 0px auto;
				margin-top: 70px;
				//padding: 10 20px;
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
  color:red;
  margin-top: 32px;
  font-family: Tw Cen MT Condensed Extra Bold;
  font-size: 50px;
  font-weight: 900;
  font-variant: normal;
				}
				h2{
					
          text-align: center;
          color: darkblue;
          
          font-family: Andalus;
          font-weight: bold;
          font-size: 32px;
				}
				ul li {
					padding: 12px 25px;
					color: white;
				}
		</style>
	<body>
		<div class="outer">
			<div class="left">
				<div class="nav">
<ul> 
	<li><i class="fa-solid fa-house"></i>&nbsp<a href="home.php"><b>Home</b></a></li>
	<li><i class="fa-solid fa-street-view"></i>&nbsp<a href="userprofilepage.php"><strong>View Profile</strong></a></li>
	<li><i class="fa-solid fa-cloud-arrow-up"></i>&nbsp<a href="uploadpage.php"><b>Upload File</b></a></li>
	<li><i class="fa-solid fa-bars"></i>&nbsp<a href="managesfile&scanQrcode.php"><b>Manage File & Scan QR Code</b></a></li>
	<li><i class="fa-sharp fa-solid fa-eye"></i>&nbsp&nbsp<a href="viewuserrequest.php"><b>View File & Make Request</b></a></li>
	<li><i class="fa-solid fa-download"></i>&nbsp<a href="#"><b>Download File</b></a></li>
    <li><i class="fa-solid fa-right-from-bracket"></i>&nbsp<a href="home.php"><b>Logout</b></a></li>
</ul>
					
				</div>
			</div>
			<div class="right">
				<h1>Blockchain Based Personal Identity Security System</h1>
				<div class="table">
				<h2>Manage all Files & Scan QR Code</h2>
				<br>
				
					<table border="stylesheet">
						<tr>
                         <th>ID</th>
                         <th>Name</th>   
                         <th>File Key</th>   
                         <th>Hash Key</th>
                         <th>File Name</th>
                         <th>Date</th>   
                         <th>Status</th> 
                         <th>Generate QR Code</th> 
                         </tr>
                         <tr>
                         	<td>....</td>
                         	<td>.......</td>
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
		</div>
	</body>	
	</head>
</html>