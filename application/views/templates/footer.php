<!-- Creating the links that are on each page.
Doing that here means that most pages have a link to themselves, though. -->
<hr/>
<FORM>
<!-- This might be a bad way to do it. I had to hardcode the link...
     It might be possible to call the view method from php? -->
<!-- 
<INPUT TYPE="BUTTON" VALUE="Go to a list"
ONCLICK="window.location.href='http://appstudio_project1/pages/view/list'">
<!-- favorites and recent is just the same list for now -->
<!-- <INPUT TYPE="BUTTON" VALUE="Go to your favorites"
ONCLICK="window.location.href='http://appstudio_project1/pages/view/list'">
<br>
<INPUT TYPE="BUTTON" VALUE="Recently viewed"
ONCLICK="window.location.href='http://appstudio_project1/pages/view/list'">
<INPUT TYPE="BUTTON" VALUE="Search for something"
ONCLICK="window.location.href='http://appstudio_project1/pages/view/search'">
</FORM>
-->
<!-- Seems like a lot of buttons. Do we need all these? -->
<a href="home" data-role="button" data-icon="star">Home</a>
<a href="list" data-role="button" data-icon="star">List</a>
<a href="search" data-role="button" data-icon="star">Search</a>
<a href="list2" data-role="button" data-icon="star">List</a>

<br><div id=footer><br>
    <strong>&copy; Arjen Swellengrebel en Sharon Gieske 2012</strong>
</div>
</div>

</body>
</html>
