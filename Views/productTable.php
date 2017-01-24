<?php
$products = require '../Data/products.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Product Table</title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <td>ID</td>
          <td>Nom</td>
          <td>Prix</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $key => $value): ?>
          <tr>
            <td><?= $value->getId();?></td>
            <td><?= $value->getName();?></td>
            <td><?= $value->getPrice();?></td>
          </tr>
      </tbody>
    <?php endforeach ?>
    </table>
  </body>
</html>
