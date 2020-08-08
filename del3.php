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
                        $del="Delete from contact_us";
                        if (mysqli_query($conn, $del)) {
                                $set="alter table contact_us AUTO_INCREMENT=1";
                                    if (mysqli_query($conn, $set)) {
                                echo " Deleted successfully, Redirecting to Mainpage..... <br>";
                                header('Refresh:1; URL=responses.php');
                                    }
                            } else {
                                echo "Error deleting record: <br>" . mysqli_error($conn);
                            }
}