<?php
// "extract" the recipe from the array
$recipe = $recipes[0];
$numberofratings = 0; $ratingstotal = 0;
foreach( $ratings as $rating ) {
    $numberofratings += 1;
    $ratingstotal += $rating->rating;
}
if ( $numberofratings > 0 ) {
    echo "Average rating: ".$ratingstotal/$numberofratings;
}

// Print all relevant information.
echo "<h1> $recipe->name </h1>";
echo "<p> $recipe->description </p>";
echo "<p> Takes $recipe->time minutes. Serves $recipe->yield. </p>";
// (is a link to an egg timer app possible?)
echo "<p> Ingredients: $recipe->ingredients </p>";
echo "<p> <b>How to prepare:</b> <br> $recipe->procedure </p>";

$li = $this->session->userdata('logged_in');
if ( $li ) {
?>
    <form <? echo 'action="'.$id.'"' ?> method="post" data-inline="true">
    <fieldset data-role="controlgroup" >
        <label for="rating">Rate this recipe?</label>
        <input type="number" name="rating" id="rating">
        <input type="submit" value="Rate!" data-inline="true" id="rate">
    </fieldset>
    </form>
<? } ?>
