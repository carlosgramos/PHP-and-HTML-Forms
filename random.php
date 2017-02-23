<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lucky Numbers</title>
  </head>
  <body>

    <?php //Script 4.6 - random.php - Generates 3 random numbers
    $n1 = mt_rand(1, 99);
    $n2 = mt_rand(1, 99);
    $n3 = mt_rand(1, 99);

    //Print out the lucky numbers
    print "<p>Your Lucky Numbers are:<br />
    $n1 <br />
    $n2 <br />
    $n3 </p>";
    ?>

  </body>
</html>
