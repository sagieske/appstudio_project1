<?php
// This block needs to be a method calling a row in the recipe table!
$id = 1;
$name = 'Omelette';
$ingredients = 'eggs';
$time = 5; // Amount of minutes taken?
$yield = 5;
$description = 'It\'s delicious!';
$procedure = '- Fry dat';

// Print all relevant information.
echo "<h1> $name </h1>";
echo "<p> $description </p>";
echo "<p> Takes $time minutes. Serves $yield. </p>";
// (is a link to an egg timer app possible?)
echo "<p> Ingredients: $ingredients </p>";
echo "<p> <b>How to prepare:</b> <br> $procedure </p>";

?>
