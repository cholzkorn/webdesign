<?php
session_start();

if (!isset($_SESSION['username'])) {
  header('location:login.php');
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Homepage</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   </head>
   <body>
     <div class="container">
       <a href="logout.php" class="float-right">LOGOUT</a>
       <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
     </div>
   </body>
 </html>
