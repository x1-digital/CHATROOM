<?php
date_default_timezone_set("Asia/Manila");
$date=date('F j, Y g:i:a');

//mysqli procedural
<?php
$servername = "sql6.freesqldatabase.com";
$username = "sql6455593";
$password = "Txh2DzXMT2";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
