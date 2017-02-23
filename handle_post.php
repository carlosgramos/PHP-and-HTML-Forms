<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forum Posting</title>
  </head>
  <body>
    <?php //Script 5.2 - Handle Post
      //Get the value for post array
      $first_name = trim($_POST['first_name']);
      $last_name = trim($_POST['last_name']);
      $posting = trim(nl2br(strip_tags($_POST['posting'])));

      //Create a full name variable:
      $name = $first_name . ' ' . $last_name;

      //Get a word count:
      $words = str_word_count($posting);

      //Get a snippet of the posting:
      $posting = str_ireplace('badword', 'XXXXX', $posting);

      //Print a message:
      print "<div>Thank you, $name, for your posting:
      <p>$posting</p>
      <p>($words words)</p>
      </div>";

    ?>
  </body>
</html>
