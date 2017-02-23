<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quotes</title>
  </head>
  <body>
  <?php //Script 2.4 - quotes.php

  //Single of double quotation marks won't matter here:
  $first_name = 'Larry';
  $last_name = "Ulman";

  //Single or double quotation marks does matter here:
  $name1 = '$first_name $last_name';
  $name2 = "$first_name $last_name";

  //Single or double quotation marks does matter here:
  print "<h1>Double Quotes</h1>
  <p>name1 is $name1 <br />
  name2 is $name2</p>";

  print '<h1>Single Quotes</h1>
  <p>name1 is $name1 <br />
  name2 is $name2</p>';

  ?>
  </body>
</html>
