<?php
session_start();
if(!$_SESSION['logged'])
{
    header("location:admin/index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Responses </title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style type="text/css">
     
  </style>
</head>
<body>
  <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper  teal darken-4">
      <a href="https://www.giits.in" class="brand-logo left"><img src="clg_logo.png"  width="100"/></a>
        <a href="#" class="brand-logo center">GIITS EXAM CELL</a>
        
      <ul class="right">
          <li><a href="admin/admin_homepage.php">Home Page</a></li>
        <li><a href="admin/logout.php">Logout</a></li>
        
      </ul>
      </div>
  </nav>
</div>
        <form action="del3.php" method="post">
     <br>    
    <table>
  <thead>
    <tr>
      <th>ID</th>
      <th> Date</th>
        <th>Name</th>
        <th>Email</th>
      <th>Query</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
        require('config.php');
        if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
          
        $sql="SELECT * FROM `contact_us`";
    if($result=mysqli_query($conn,$sql))
      {     
        if(mysqli_num_rows($result)>0)
          {
          while($row=mysqli_fetch_array($result))
            {
              echo "<tr>";
              echo "<td>" .$row['id']. "</td>";
              echo "<td>" .$row['date']. "</td>";
              echo "<td>" .$row['name']. "</td>";
              echo "<td>" .$row['email']. "</td>";
              echo "<td>".$row['message']."</td>";
              echo "</tr>";
            }
    
          }
          else
            echo "<tr>
            <td> </td>
            <td> </td>
            <td class='center'>No notifications to Display</td>
            <td></td>
                 </tr>";
          }
      
?>
                   
  </tbody>
</table>
        <br>
            <div class="center">
                 <a class="waves-effect waves-light btn  teal darken-4 white-text" onclick="history.back()"><b>BACK</b></a>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <button class="btn waves-effect waves-light  teal darken-4 white-text " type="submit" name="submit" onclick="return check();"><b>DELETE ALL MESSAGES</b>
                </button>
               
        
            </div>
        
      
         

    
    <br><br><br><br><br><br><br><br><br><br><br>
    </form>
    <footer class="page-footer  teal darken-4">
      <br><br>
    <div class="footer-copyright">
      <div class="container">
      <center> Designed By : <b>K.SAMEER</b> Asst.Professor,<b> K.JASWANTH RAJ</b> Asst.Professor</center>
      </div>
    </div>
  </footer>  
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
<script>
    function check()
    {
        var req=confirm("Do you want to delete Messages..? ");
        if(req== false)
            {
                return false;
            }
    }
</script>
  </body>
</html>
