<?php 
$drinks = [
  "Honeydew Milk Tea" => 2.50,
  "Lychee Milk Tea" => 2.60,
  "Rose Peach Sweet Tea" => 2.20,
  "Brown Sugar Milk Tea" => 3.50
];

$pastries = [
  "Custard Bun",
  "Garlic Sausage Bun",
  "Almond Croissant",
  "Pandan Muffin"
];

?>

<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
  <?php foreach($drinks as $drink=>$price): ?>
    <li><?="$drink: £$price"?></li>
  <?php endforeach;?>
</ul>
<h3>Pastries! ($2 each)</h3>
<ul>
  <?php for($i=0; $i < count($pastries); $i++):?>
    <li> <?=$pastries[$i] ?> </li>
  <?php endfor;?>
</ul>
