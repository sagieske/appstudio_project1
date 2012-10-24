
<h2> This is the home screen. </h2>
<p> You can click on the links below to see other pages.</p>

<?php

if ( $logged_in ) {
    echo 'You are logged in, '.'subject name here'.'.';
    echo '<br>(Note to self: remember names.)';
} 
else { 
    ?>
    <form action="home" method="post" data-inline="true">
    <fieldset data-role="controlgroup" >
        <label for="slider-time">And you can login now:</label>
        <input type="text" name="un" id="un">
        <input type="text" name="pw" id="pw">
        <input type="submit" value="Login!" data-inline="true" id="login">
    </fieldset>
    </form>
    <?php 
    }

?>

