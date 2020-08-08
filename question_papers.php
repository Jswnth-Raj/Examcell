<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Question Papers</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style type="text/css">
     table.a 
            {
				table-layout: fixed ;
				width: 100% ;
			}
      td.a 
            {
			     width: 33.3% ;
                font-size:16px;
			}
        a
            {
                color:black;
                text-decoration: 
            }
      a:hover 
            {
					color: deeppink;
            }
      
  </style>
</head>
<body>
  <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper  pink darken-4">
      <span class="brand-logo center">GIITS EXAM CELL</span>
      <ul class="right">
        <li><a href="https://www.giits.in">Giits College</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
        <div class="col s12">
          <ul class="tabs  pink darken-4">
            
           <li class="tab col s3"><a href="index.html" class="waves-effect waves-light white-text">HOME</a></li>
              <li class="tab col s3"><a href="academic_calendars.php" class="waves-effect waves-light white-text">ACADEMIC CALENDARS</a></li>
              <li class="tab col s3"><a href="time_tables.php" class="waves-effect waves-light white-text">TIME TABLES</a></li>
              <li class="tab col s3"><a href="question_papers.php" class="waves-effect waves-light white-text"><b>QUESTION PAPERS</b></a></li>
            <li class="tab col s3"><a href="jntuk_results.php" class="waves-effect waves-light white-text">JNTUK RESULTS</a></li>
            <li class="tab col s3"><a href="online_marks.php" class="waves-effect waves-light white-text">ONLINE MARKS</a></li>
            <li class="tab col s3"><a href="mid_marks.php" class="waves-effect waves-light white-text">MID MARKS</a></li>
            <li class="tab col s3"><a href="lab_marks.php" class="waves-effect waves-light white-text">LAB MARKS</a></li>
            <li class="tab col s3"><a href="giits_notifications.php" class="waves-effect waves-light white-text">GIITS NOTIFICATIONS</a></li>    
          </ul>
        </div>
      </div>
  </nav>
</div>
<div class="row">
    <p><br></p>
    <table class="striped" >
  <thead>
    <tr>
    
      <!--<th>id</th> -->
      <th class="center">Publishied Date</th>
      <th></th>
      <th style="padding-left:200px">Notifications</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
    require('config.php');
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
          }
        $sql="SELECT * FROM `question_papers` order by id desc";
    if($result=mysqli_query($conn,$sql))
      {     
        if(mysqli_num_rows($result)>0)
          {
          while($row=mysqli_fetch_array($result))
            {
          echo "<tr>";
            //echo "<td>".$row['id']."</td>";
              echo "<td class='center'>".$row['date']."</td>";
              echo "<td><i class='material-icons'>notifications</i></td>";
              echo "<td> <a href=".$row['filepath'].">".$row['notification']."</a> </td>";
                  echo "</tr>";
            }
    
          }
          else
            echo "<tr>
            <td> </td>
            <td> </td>
            <td>No notifications to Display</td>
            </tr>";
}
?>
  </tbody>
</table>
    <br><br>
</div>
<br><br><br><br>
    <footer class="page-footer  pink darken-4">
        <h4 style="padding-left: 10px" class="center">Contact Us</h4>
      <div class="row">
        <table class="a">
            <tr>
                <td>&nbsp &nbsp &nbsp Chief Superintendent </td>
                 <td>9542863355</td>
                  <td>Tanukuvenkatesh@yahoo.com</td>
            </tr>
             <tr>
                <td>&nbsp &nbsp &nbsp Coordinator's</td>
                <td>9121214319 , 9553228198</td>
                <td>Examcell.gonna@gmail.com</td>
            </tr>    
        </table>
      </div>

      <div class="row">
        <form name="contact" method="post" id="contact" action="contact_us.php">
        <div class="col s3">
          <div class="input-field col s12 ">
          <input id="name" name="name" type="text" class="validate white-text" required>
          <label for="name"><span style="color:white">Name</span></label>
            </div>
            </div>
            

        <div class="col s3">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate white-text" required>
          <label for="email"><span style="color:white">Email</span></label>
        </div>
         </div>

        <div class="col s5">
        <div class="input-field col s12">
        <textarea id="textarea1" name="message" class="materialize-textarea white-text validate" required></textarea>
          <label for="textarea1"><span style="color:white">Message</span></label>
        </div>
        </div>
        <div class="col s1"><br>
        <button class="btn waves-effect waves-light grey lighten-5 pulse pink-text" type="submit" name="submit"><b>Send</b>
        </button>
        </div>
        </form>
      </div>
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
      $('#textarea1').val('');
  M.textareaAutoResize($('#textarea1'));
  </script>
  </body>
</html>