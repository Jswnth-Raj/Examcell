<?php
session_start();
if(!$_SESSION['logged'])
{
    header("location:admin/index.php");
}

?>



<?php
if(isset($_POST['submit']))
{
    require_once('config.php');
    if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                              } 
    $table=$_POST['table'];
$chkarr=$_POST['checkbox'];
foreach($chkarr as $id)
{
   
    $sql="SELECT filepath FROM $table where id='$id'";
    if($result=mysqli_query($conn,$sql))
      {     
        if(mysqli_num_rows($result)>0)
          {
          while($row=mysqli_fetch_array($result))
            {
              $fp=$row['filepath'];
              if($fp!="#")
              {
                  if( file_exists($fp))
                  {
                  if (!unlink($fp))
                      {
                      echo ("Error deleting $fp<br>");
                      }
                    else
                      {
                      echo ("File Deleted ,");
                    }
                  }
              }
              
              $del="Delete from $table  where id='$id'";
                        if (mysqli_query($conn, $del)) {
                                echo " Notification deleted successfully, Redirecting to Mainpage..... <br>";
                            } else {
                                echo "Error deleting record: <br>" . mysqli_error($conn);
                            }
                      }
              
          }
        }
    }
    
}
header('Refresh:1; URL=delete.php');
    
mysqli_close($conn);
?>