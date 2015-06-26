<?php
$pageTitle = "Terms";
include 'inc/header.php';
?>

<div class="mycontent">

    <?php 
    $date = strtotime(date('2014/04/24'));
    $now = strtotime(date('Y/m/d'));
    if($date >= $now){
    echo '<h3>DURING THE B&B LITE SEASON, 1ST OCTOBER 2013 TO 24TH APRIL 2014, ALL BOOKINGS ARE NON-REFUNDABLE NOR DATE TRANSFERABLE.</h3>';
    }
    ?>
    <p>
        Goodwood Events
        <br/><br/>
        Require a non-refundable deposit of &pound;150 Should a booking be cancelled the full amount will become payable. When we re-let the room we will refund the amount we re-sold the room for less any extra expenses accrued.
        <br/><br/>
        In the unlikely event it becomes necessary for US to cancel your Booking due to circumstances beyond our control - we will refund ALL monies paid to us, by you.  No other compensation will be payable.
        <br/><br/>
        We strongly urge you to cover yourself . . . Just in case
        <br/><br/>


        For long term bookings, more than 60 days ahead of booking date, the full amount of the booking is required if cancelled with 6 weeks of your intended stay. In these cases the room is likely to get re-let at least part of the booking.
        <br/><br/>
        *Charge does not apply if the room can be re-let for the same amount. We will endevour to recoup most if not all of the cost by re-letting the room. The more notice given the easier this is.
    </p>
    <h3>Check-In Times</h3>
    <p>
        Self Check In is after 4pm unless agreed before hand.
        <br/><br/>
        Early check-in from 12 midday is available for an extra &pound;10
        Late check-out from 10:30am - 1pm is also available for an extra &pound;10 
        <br/><br/>
        We politely request that guests check out by 10:30am on the day of departure
        <br/><br/>
        For all Goodwood motoring events we charge a &pound;150 non-refundable deposit. This is because many people book local accommodation, just in case, they decide to come. We find this non refundable deposits deter time wasters freeing our rooms for serious petrol heads.
    </p>
</div>

<?php include 'inc/footer.php'; ?>