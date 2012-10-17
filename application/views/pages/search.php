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
<input type="submit" value="Search!">
</div>
