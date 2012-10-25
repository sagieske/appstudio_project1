
<h2> This is the home screen. </h2>
<p> You can click on the links below to see other pages.</p>

<?php
$li = $this->session->userdata('logged_in');

if ( $li ) {
    echo 'You are logged in, '.$this->session->userdata('username').'.';
    echo '<br>(Note to self: remember names.)';
} 
else { 
    echo 'You are not logged in.';
} 
?>
    <form action="home" method="post" data-inline="true">
    <fieldset data-role="controlgroup" >
        <label for="slider-time">And you can login now:</label>
        <input type="text" name="un" id="un">
        <input type="text" name="pw" id="pw">
        <input type="submit" value="Login!" data-inline="true" id="login">
        
    </fieldset>
    </form>

