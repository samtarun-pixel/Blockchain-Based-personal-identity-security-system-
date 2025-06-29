<!DOCTYPE html>
<html>
<head>
    <title>File Key Page</title>
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
width: 325px;
             height:717px;
//border: 1px solid;
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
width: 1180px;
            height:717px;
//border: 1px solid;
float: left;    
opacity: 0.5;
background-color: white;
margin-left: 12px;

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
    margin: 0px auto;
    margin-top: 160px;
  margin-left: -12px;
}
h1
{
  text-align: center;
  color:red;
  margin-top: 32px;
  font-family: Tw Cen MT Condensed Extra Bold;
  font-size: 50px;
  font-weight: 900;
  font-variant: normal;
}
.req
{
   height: 400px;
   width: 560px;
   margin-top: 120px;
   margin-left: 170px;
   //border: 1px solid;
}
a{
  text-decoration: none;
}
 #fileKey {
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button a{
          text-decoration: none;
          color: white;
        }

        button:hover {
            background-color: #0056b3;
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
                <form method="POST" enctype="multipart/form-data">
              <input type="file" name="file">
              <button type="submit">Submit</button>
   
                </form>
            </div>
        </div>      
    </div>
     
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bpiss";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "files/".$filename;
    if (move_uploaded_file($tempname, $folder)) {
        // File moved successfully, now insert file details into the database
        $sql = "INSERT INTO files (files) VALUES ('$filename')";
        if ($conn->query($sql) === TRUE) {
            echo "File uploaded successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error moving file to destination folder.";
    }
}

$conn->close();
?>

