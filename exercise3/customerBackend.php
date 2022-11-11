<?php
  $itemACount = (int)$_POST['item-a'];
  $itemBCount = (int)$_POST['item-b'];
  $itemCCount = (int)$_POST['item-c'];
  $shipping = $_POST['shipping'];
  $shippingCost = 0;
  switch($shipping) {
    case 'ship-b':
      $shippingCost = 50;
    break;
    case 'ship-c':
      $shippingCost = 5;
    break;
    default:
      $shippingCost = 0;
    break;
  }
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $total = $itemACount * 4.99 + $itemBCount * 7.99 + $itemCCount * 99.99 + $shippingCost;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Exercise 3 | Receipt</title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body id="receipt">
    <h1>Welcome <?=$username?>,</h1>
    <h3>Your password is <?=$password?></h3>
    <table>
      <tr>
        <th>Item</th>
        <th>Cost</th>
      </tr>
      <tr>
        <td>Milk</td>
        <td>$4.99 x<?=$itemACount?></td>
      </tr>
      <tr>
        <td>Chocolate Milk</td>
        <td>$7.99 x<?=$itemBCount?></td>
      </tr>
      <tr>
        <td>Whole Cows</td>
        <td>$99.99 x<?=$itemCCount?></td>
      </tr>
      <tr>
        <td>Shipping</td>
        <td>$<?=$shippingCost?></td>
      </tr>
      <tr>
        <td>Total</td>
        <td>$<?=$total?></td>
      </tr>
    </table>
  </body>
</html>