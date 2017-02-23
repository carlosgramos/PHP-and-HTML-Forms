<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Greetings!</title>
    <style type="text/css">
      .bold{
        font-weight: bolder;
      }
    </style>
  </head>
  <body>

  <?php //Script 3.7 - hello.php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  //This page should receive a name value in the URL
  //Say hello
  $first_name = $_GET['first_name'];
  $last_name = $_GET['last_name'];
  print "<p>Hello, <span class=\"bold\">$first_name $last_name</span>!</p>";
  ?>

  </body>
</html>
