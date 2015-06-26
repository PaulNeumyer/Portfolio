<?php
$pageTitle = "Tattoos";
include('inc/header.php');

$images = array();
$images[] = "http://thegoodproblems.com/images/t1.jpg";
$images[] = "http://thegoodproblems.com/images/t2.jpg";
$images[] = "http://thegoodproblems.com/images/t3.jpg";
$images[] = "http://thegoodproblems.com/images/t4.jpg";
$images[] = "http://thegoodproblems.com/images/t5.jpg";
$images[] = "http://thegoodproblems.com/images/t6.jpg";
$images[] = "http://thegoodproblems.com/images/t7.jpg";
$images[] = "http://thegoodproblems.com/images/t8.jpg";
$images[] = "http://thegoodproblems.com/images/t9.jpg";
$images[] = "http://thegoodproblems.com/images/t10.jpg";
$images[] = "http://thegoodproblems.com/images/t11.jpg";
$images[] = "http://thegoodproblems.com/images/t12.jpg";
$images[] = "http://thegoodproblems.com/images/t13.jpg";
$images[] = "http://thegoodproblems.com/images/t14.jpg";
$images[] = "http://thegoodproblems.com/images/t15.jpg";
$images[] = "http://thegoodproblems.com/images/t16.jpg";
$images[] = "http://thegoodproblems.com/images/t17.jpg";
$images[] = "http://thegoodproblems.com/images/t18.jpg";
$images[] = "http://thegoodproblems.com/images/t19.jpg";
$images[] = "http://thegoodproblems.com/images/t20.jpg";
$images[] = "http://thegoodproblems.com/images/t21.jpg";
$images[] = "http://thegoodproblems.com/images/t22.jpg";
$images[] = "http://thegoodproblems.com/images/t23.jpg";
$images[] = "http://thegoodproblems.com/images/t24.jpg";
$images[] = "http://thegoodproblems.com/images/t25.jpg";
$images[] = "http://thegoodproblems.com/images/t26.jpg";
$images[] = "http://thegoodproblems.com/images/t27.jpg";
$images[] = "http://thegoodproblems.com/images/t28.jpg";
$images[] = "http://thegoodproblems.com/images/t29.jpg";
$images[] = "http://thegoodproblems.com/images/t30.jpg";
$images[] = "http://thegoodproblems.com/images/t31.jpg";
$images[] = "http://thegoodproblems.com/images/t32.jpg";
?>

<h2>Here is a taste of what we can do for you:</h2>

<ul>
    <li>HALF SLEEVES: $200 (Any Design)</li>
    <li>FULL SLEEVES: $320 (Any Design)</li>
    <li>4 HOURS UNLIMITED: $300</li>
    <li>10 HOURS UNLIMITED: $600</li>
    <li>COLOR COST EXTRA</li>
    <li>COVER UPS/TOUCH UPS</li>
    <li>NO JOB TOO BIG. NO JOB TOO SMALL</li>
</ul> 

<form action="https://www.paypal.com/cgi-bin/webscr"; method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="97YYPKZQL46W8">
    <table width="100%">
        <tr><td><input type="hidden" name="on0" value="Required Reserve">Required Reserve</td></tr><tr><td><select name="os0">
                    <option value="Reserve">Reserve $10.00 USD</option>
                </select> </td></tr>
    </table>
    <div style="text-align: center">
    <input type="hidden" name="currency_code" value="USD">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif"; border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"; width="1" height="1">
    </div>
</form>
<br />

<h2>
    Click on an image to enlarge
</h2>

<div class="grid">
    <?php
    foreach ($images as $image) {
        echo '<a href="' . $image . '" border="0"><img src="' . $image . '" /></a>';
    }
    ?>

</div>



<?php include('inc/footer.php'); ?>