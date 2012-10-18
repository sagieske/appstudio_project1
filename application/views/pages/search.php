<h3>Search for a recipe here.</h3>
<!-- 
Script for pulldown menu 
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
</script>-->


<form action="show_searched_recipes" method="get" data-inline="true">
<fieldset data-role="controlgroup" >
	<legend>Search for:</legend>

    	<input type="radio" name="radio-mini" id="radio-mini-1" value="choice-1" checked="checked" />
    	<label for="radio-mini-1">Name</label>

	    <input type="radio" name="radio-mini" id="radio-mini-2" value="choice-2"  />
    	<label for="radio-mini-2">Description</label>
    	
    	<input type="radio" name="radio-mini" id="radio-mini-3" value="choice-3"  />
    	<label for="radio-mini-3">Ingredients</label>
    	
        <input type="text"  name="search" id="search">
</fieldset>
</form>

<input type="submit" value="Search!" data-inline="true">

<hr>
<label for="slider-time">Maximum time:</label>
<input type="range" name="slider-time" id="slider-time"  step="5"/>
<input type="submit" value="Search!" data-inline="true" id="timesearch">

<hr>
<label for="slider-yield">Maximum yield:</label>
<input type="range" name="slider-yield" id="slider-yield"  step="1"/>
<input type="submit" value="Search!" data-inline="true" id="yieldsearch">

<!--Script to set min time and max time on slider dependent on smallest/biggest time of all recipes-->
<script>

$("#slider-time").attr("value", parseInt('<?php echo $maxtime[0]['time'] ;?>')) //set standard value to max time
$("#slider-time").attr("min", parseInt('<?php echo $mintime[0]['time'] ;?>'))
$("#slider-time").attr("max", parseInt('<?php echo $maxtime[0]['time'] ;?>'))

$("#slider-yield").attr("value", parseInt('<?php echo $maxyield[0]['yield'] ;?>')) //set standard value to max time
$("#slider-yield").attr("min", parseInt('<?php echo $minyield[0]['yield'] ;?>'))
$("#slider-yield").attr("max", parseInt('<?php echo $maxyield[0]['yield'] ;?>'))
</script>

<!--
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
-->
</div>
