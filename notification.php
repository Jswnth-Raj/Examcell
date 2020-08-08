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
  <title>Notifications Upload</title>

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
    <div class="nav-wrapper cyan darken-4">
      <a href="https://www.giits.in" class="brand-logo left"><img src="clg_logo.png"  width="100"/></a>
        <a href="#" class="brand-logo center">GIITS EXAM CELL</a>
        
      <ul class="right">
          <li><a href="admin/admin_homepage.php">Home Page</a></li>
        <li><a href="admin/logout.php">Logout</a></li>
        
      </ul>
      </div>
  </nav>
</div>
    <br><br><br>
<div class="container">
    <form name="upload_notification" method="post" id="upload_notification" action="uploads.php" enctype="multipart/form-data">
    <div class="row">
        <div class="input-field col s12">
             <i class="material-icons prefix">mode_edit</i>
          <textarea id="textarea1" name="notif" class="materialize-textarea validate"></textarea>
          <label for="textarea1">Enter Notification Here:</label>
        </div>
      </div>
        
        <div class="row">
            <div class="file-field input-field ">
                <div class="btn cyan darken-4">
                    <span>Choose File To Upload</span>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
        <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
        </div>
        
    <div class="row">
        
    <div class="input-field col s12">
    <select name="location" id="location">
      <option value="" disabled selected>Choose Notitication Type</option>
      <option value="academic_calendars/">Academic Calendars</option>
      <option value="time_tables/">Time Tables</option>
      <option value="question_papers/">Question Papers</option>
      <option value="jntuk_results/">Jntuk Results</option>
      <option value="online_marks/">Online Marks</option>
      <option value="mid_marks/">Mid Marks</option>
      <option value="lab_marks/">Lab Marks</option>
      <option value="giits_notifications/">Giits Notifications</option>
    </select>
    </div>
   </div>
        
 
        <div class="row">
        <div class="center">
        <button class="btn waves-effect waves-light cyan darken-4 pulse white-text " type="submit" name="submit" onclick="return check();"><b>Post Notification</b>
        </button>
        </div>
        </div>
        
        
    </form>
  </div>
    <br><br><br><br><br><br><br>
    <footer class="page-footer cyan darken-4">
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
  M.textareaAutoResize($('#textarea1'));
    </script>
    
<script>
function check()
    {
        var n=document.getElementById('textarea1').value;
        if(n.length<1)
            {
            alert("please enter notification to continue....");
            return false;
            }
        var l=document.getElementById('location').value
        if(l=="")
            {
                alert("please select type of notification");
                return false; 
            }
    }


</script>
    <script>
    $(document).ready(function(){
    $('select').formSelect();
  });
    
    </script>
    
  </body>
</html>
