<?php
session_start();
if(!$_SESSION['logged'])
{
    header("location:admin/index.html");
}

?>

<?php
require('config.php');
$path=$_POST['location'];
$table=rtrim($path, "/");
$target_dir = "./uploads/".$path;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$fn = str_replace(" ", "-", $_FILES['fileToUpload']['name']);
$fe=$target_dir.$fn;
$uploadOk = 1;
$filerror=0;
$fname="#";
if(isset($_POST["submit"])) 
{
	if(!$_FILES['fileToUpload']['name'] == "") 
	{
	if (file_exists($target_file) || file_exists($fe)) 
	{
    echo "Sorry, file already exists .";
    $uploadOk = 0;
    $filerror=1;
	}
	if ($uploadOk == 0) 
	{
    echo "Sorry, your file was not uploaded.";
    $filerror=1;
    } 
    else 
    {
    	
    	$tn=basename( $_FILES["fileToUpload"]["name"]);
    	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
     		{
        		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        		
        		rename($target_dir.$tn,$target_dir.$fn);
        		$fname=$target_dir.$fn;

        		
    		} 
    	else 
    		{
        		echo "Sorry, there was an error uploading your file.";
        		$filerror=1;
    		}
	}
	}

	if(!$_POST['notif']=="" && $filerror==0)
	{
	if (!$conn) 
    	die("Connection failed: " . mysqli_connect_error());
	$notif=$_POST["notif"];
	$date=date("d/m/Y");
	$sql="INSERT INTO ".$table."(`date`, `notification`, `filepath`) VALUES ('$date','$notif','$fname')";

	if ($conn->query($sql) === TRUE) 
	{
    
	echo"<br>"."Notificaion uploaded to database successfully";
	header('Refresh: 1; URL=notification.php');
	} 
	else 
	{
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	}
	else
	{
		echo "Notification not uploaded redirecting to mainpage....";
		header('Refresh: 3; URL=notification.php');
	}


	
}

?>