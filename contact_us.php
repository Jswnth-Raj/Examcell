<?php
if(isset($_POST['submit']))
{
require_once('config.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$n=$_POST['name'];
$mail=$_POST['email'];
$msg=$_POST['message'];
date_default_timezone_set('Asia/Kolkata');
$date = date('m-d-Y');

$sql="INSERT INTO contact_us(name, email, message,`date`) VALUES ('$n','$mail','$msg','$date')";
if ($conn->query($sql) === TRUE) {
	
    echo "<html><body><h3>Your query is successfully submitted please check your mail after 24 hrs for futher information<br> Redirecting to Home page.....</h3></body></html>";
    header('Refresh: 5; URL=index.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>