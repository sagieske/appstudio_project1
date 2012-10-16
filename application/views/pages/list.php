<?php

// The array should be in memory at this point.
foreach ($recipes as $recipe):
    echo "<h3> <a href=\"recipe/$recipe->recipeID\">
        $recipe->name </a> </h3>";
    echo "<p> $recipe->description <br>";
    echo "Takes <b>$recipe->time</b> minutes. 
        Serves <b>$recipe->yield</b>. </p>";
    echo "<hr/>"; // How to get rid of the final bar?
endforeach;

// A next/previous page function would be handy here.

?>
