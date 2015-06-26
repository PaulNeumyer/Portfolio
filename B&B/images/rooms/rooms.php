<?php
$pageTitle = "Home";
include 'inc/header.php';
?>
<h3>The Best Beds In The South</h3>

<p>
    Why should you pay to stay away from home and sleep in an inferior bed?  If you visit us you're in for a treat.
    <br /><br />
    Rooms are allocated on arrival
    <br /><br />
    We offer Free Parking although there is alternative, slightly more expensive, parking nearby... Alternative Parking (Click link to see our little joke)
</p>
<div data-role="collapsible" data-theme="b" data-content-theme="d">
    <h4>Fontwell Room</h4>
    <a href="#fontwell1" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="images/rooms/fontwell1.jpg" style="width: 30%;"/></a>
    <div data-role="popup" id="fontwell1" class="popupphoto" data-overlay-theme="a">
        <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a><img class="popphoto" src="images/room1.jpg" style="max-height:512px;">
    </div>
    <a href="#fontwell2" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="images/rooms/fontwell2.jpg" style="width: 30%;"/></a>
    <div data-role="popup" id="fontwell2" class="popupphoto" data-overlay-theme="a">
        <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a><img class="popphoto" src="images/room1.jpg" style="max-height:512px;">
    </div>
    <a href="#fontwell3" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="images/rooms/fontwell3.jpg" style="width: 30%;"/></a>
    <div data-role="popup" id="fontwell3" class="popupphoto" data-overlay-theme="a">
        <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a><img class="popphoto" src="images/room1.jpg" style="max-height:512px;">
    </div>
    <p>I'm the collapsible content with a themed content block set to "d".</p>
</div>

<?php include 'inc/footer.php'; ?>