<?php
// This block needs to be a method calling a row in the recipe table!
$id = 1;
$name = 'Omelette';
$ingredients = 'eggs';
$time = 5; // Amount of minutes taken?
$yield = 5;
$description = 'It\'s delicious!';
$procedure = '- Fry dat';

// True list should have a FOR LOOP!
// Also note that the final item does not need a bar beneath it!
echo "<h3> <a href=\"http://appstudio_project1/pages/view/recipe\">$name</a> </h3>";
echo "<p> $description <br>";
echo "Takes <b>$time</b> minutes. Serves <b>$yield</b>. </p>";
echo "<hr/>"; // Print four variables, then a bar.
echo "<h3> <a href=\"http://appstudio_project1/pages/view/recipe\">$name</a> </h3>";
echo "<p> $description </p>";
echo "Takes <b>$time</b> minutes. Serves <b>$yield</b>. </p>";
echo "<hr/>"; // bar.
echo "<h3> <a href=\"http://appstudio_project1/pages/view/recipe\">$name</a> </h3>";
echo "<p> $description </p>";
echo "Takes <b>$time</b> minutes. Serves <b>$yield</b>. </p>";
// No bar here.

// A next/previous page function would be handy here.

?>
