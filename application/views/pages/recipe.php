<?php
// "extract" the recipe from the array
$recipe = $recipes[0];

// Print all relevant information.
echo "<h1> $recipe->name </h1>";
echo "<p> $recipe->description </p>";
echo "<p> Takes $recipe->time minutes. Serves $recipe->yield. </p>";
// (is a link to an egg timer app possible?)
echo "<p> Ingredients: $recipe->ingredients </p>";
echo "<p> <b>How to prepare:</b> <br> $recipe->procedure </p>";

?>
