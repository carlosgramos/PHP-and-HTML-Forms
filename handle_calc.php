<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Product Cost Calculator</title>
    <style type="text/css">
      .number {
        font-weight: bold;
      }
    </style>
  </head>
  <body>

  <?php //Script 4.2 - handle_calc.php
  /*Takes values from calculator.html and performs calculations*/
  //Handle errors
  ini_set('display_errors', '1');
  error_reporting(E_ALL);

  //Get values from form:
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $discount = $_POST['discount'];
  $tax = $_POST['tax'];
  $shipping = $_POST['shipping'];
  $payments = $_POST['payments'];

  //Calculate the total:
  $total = (($price * $quantity) + $shipping) - $discount;

  //Determine the tax rate (note, divided by 100 to get the decimal equivalent)
  //Then determine how much something costs with tax by adding 1 to the percent
  //then multiplying that new rate by the total
  $tax_rate = $tax / 100;
  $tax_rate++;

  //Factor in the tax rate:
  $total = $total * $tax_rate;

  //Calculate teh monthly payments:
  $monthly = $total / $payments;

  //Format the total and monthly for output
  $total = number_format($total, 2);
  $monthly = number_format($monthly, 2);

  //Print out the results
  print "<p>You have selected to purchase:<br>
    <span class=\"number\">$quantity</span> widget(s) at <br>
    $<span class=\"number\">$price</span> price each plus a <br>
    $<span class=\"number\">$shipping</span> shipping cost and a <br>
    <span class=\"number\">$tax</span> percent tax rate. <br>
    After your <span class=\"number\">$discount</span> discount, the total cost is
    $<span class=\"number\">$total</span>. <br>
    Divided over <span class=\"number\">$payments</span> monthly payments,
    that would be $<span class=\"number\">$monthly</span> each.
  </p>";
  ?>

  </body>
</html>
