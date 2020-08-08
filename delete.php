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
  <title>Notifications Delete</title>

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
    
<form name="delete_notification" method="post" id="delete_notification" action="del1.php" >
    <br><br><br><br>
    <div class="row">
        
    <div class="input-field col s10">
    <select name="location" id="location">
      <option value="" disabled selected>Choose Notification Type to Delete </option>
      <option value="academic_calendars">Academic Calendars</option>
      <option value="time_tables">Time Tables</option>
      <option value="question_papers">Question Papers</option>
      <option value="jntuk_results">Jntuk Results</option>
      <option value="online_marks">Online Marks</option>
      <option value="mid_marks">Mid Marks</option>
      <option value="lab_marks">Lab Marks</option>
      <option value="giits_notifications">Giits Notifications</option>
    </select>
        </div>
        <div class="input-field col s10">
        <button class="btn waves-effect waves-light  teal darken-4 pulse white-text " type="submit" name="submit" onclick="return check();"><b>View Notifications</b>
        </button>
    </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
    $(document).ready(function(){
    $('select').formSelect();
  });
    
    </script>
    <script>
    function check()
    {
        var l=document.getElementById('location').value;
        if(l.length<1)
            {
                alert("Select Notification Type to Proceed....");
                return false;
            }
    }
    
    
</script>
  </body>
</html>
