<!DOCTYPE html>
<html>

  <head>
     <link rel="stylesheet" href="main.css">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
     <script type="text/javascript" src="../js/angular.min.js"></script>
     <script type="text/javascript" src="../js/angular-route.min.js"></script>
     <script type="text/javascript" src="../js/myApp.js"></script>  
     <script type='text/javascript' src='app.js'></script>
  </head>
  <body ng-app="cybWebsite">
   <div class="wrapper">
   <?php include 'nav.php';?>
   <div class="body">
   <div ng-view ></div>
     </div> <!-- end of profile-->
  <div style="clear:both"></div>
 <?php include 'footer.php';?>
 </div>
  
  </body>
   
  </html>
