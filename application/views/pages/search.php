<h3>Search for a recipe here.</h3>
<!-- TODO: does not search input -->
<script type="text/javascript">
  function hideDivs (x) {
    if (x == 1) {
      document.getElementById('recipeNameDiv').style.display = 'block';
      document.getElementById('ingredientsDiv').style.display = 'none';
      document.getElementById('descriptionDiv').style.display = 'none';
    }
    else if (x == 2) {
      document.getElementById('recipeNameDiv').style.display = 'none';
      document.getElementById('ingredientsDiv').style.display = 'block';
      document.getElementById('descriptionDiv').style.display = 'none';
    }
    else {
      document.getElementById('recipeNameDiv').style.display = 'none';
      document.getElementById('ingredientsDiv').style.display = 'none';
      document.getElementById('descriptionDiv').style.display = 'block';
    }
  }
</script>


<?php
// "extract" the recipe from the array
//$mintime = $mintime[0];
//$maxtime = $maxtime;

// Print all relevant information.
echo var_dump($mintime[0]['time']);
echo var_dump($maxtime[0]);
echo var_dump($minyield[0]);
echo var_dump($maxyield[0]);

?>

<label for="slider-1">Input slider:</label>
<input type="range" name="slider-1" id="slider-1"  />

<!--Script to set min time and max time on slider dependent on smallest/biggest time of all recipes-->
<script>
$("#slider-range-max").slider("option", "max", 20)
$("#slider-1").attr("min", parseInt('<?php echo $mintime[0]['time'] ;?>'))
$("#slider-1").attr("max", parseInt('<?php echo $maxtime[0]['time'] ;?>'))
</script>

<form action="show_searched_recipes" method="get">
<fieldset data-role="controlgroup">
	<legend>Search for:</legend>
     	<input type="radio" name="type" id="recipeName" value="recipeName" checked="checked" onclick='hideDivs(1)' />
        <label for="recipeName">Recipe name</label>
        <div id="recipeNameDiv" style="display:none">
            <label for="else">Name: </label>
            <input type="text"  name="recipeName" id="else">
        </div>

     	<input type="radio" name="type" id="ingredients" value="ingredients" checked="checked" onclick='hideDivs(2)' />
        <label for="ingredients">Ingredient</label>
        <div id="ingredientsDiv" style="display:none">
            <label for="else">Name: </label>
            <input type="text"  name="ingredients" id="else">
        </div>
                
        <input type="radio" name="type" id="description" value="description" checked="description" onclick='hideDivs(3)' />
        <label for="description">Description</label>
        <div id="descriptionDiv" style="display:none">
            <label for="else">Name: </label>
            <input type="text"  name="description" id="else">
        </div>


</fieldset>
<!--
<fieldset data-role="controlgroup" data-mini="true">
    	<input type="radio" name="radio-mini" id="radio-mini-1" value="choice-1" checked="checked" />
    	<label for="radio-mini-1">Credit</label>

	<input type="radio" name="radio-mini" id="radio-mini-2" value="choice-2"  />
    	<label for="radio-mini-2">Debit</label>
    	
    	<input type="radio" name="radio-mini" id="radio-mini-3" value="choice-3"  />
    	<label for="radio-mini-3">Cash</label>
</fieldset>-->

<input type="submit" value="Search!">
</div>
