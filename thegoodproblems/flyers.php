<?php
$pageTitle = "Flyers";
include('inc/header.php');

$images = array();
$images[] = "http://thegoodproblems.com/images/Burgundy.jpg";
$images[] = "http://thegoodproblems.com/images/flyers10.jpg";
$images[] = "http://thegoodproblems.com/images/FlyersPic.jpg";
$images[] = "http://thegoodproblems.com/images/tropical_summer_madness.jpg";
$images[] = "http://thegoodproblems.com/images/mlkdayparty.jpeg";
$images[] = "http://thegoodproblems.com/images/side2_rgb.jpg";
$images[] = "http://thegoodproblems.com/images/HalloweenFlyer1.jpg";
$images[] = "http://thegoodproblems.com/images/blue646rgb.jpg";
$images[] = "http://thegoodproblems.com/images/tshirtFlyer_646.jpg";
?>

<h2>
    What can we offer you? 
</h2>

<ul>
    <li>Free flyer design on orders over $200</li> 
    <li>Available for pick up in New York City area 
    <li>Have your flyer designed for $20 
    <li>48 hour turn around time 
    <li>Includes both sides color
</ul>

<h2>
    How much is it going to cost me? 
</h2>

<table data-role="table" id="flyer-prices" data-mode="reflow" class="ui-responsive table-stroke">
    <thead>
        <tr>
            <th data-priority="1">Flyer Size</th>
            <th data-priority="2">Quantity</th>
            <th data-priority="3">Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>3x4</th>
            <td>2,500</td>
            <td>$90</td>
        </tr>
        <tr>
            <th>3x4</th>
            <td>5,000</td>
            <td>$140</td>
        </tr>
        <tr>
            <th>4x6</th>
            <td>2,500</td>
            <td>$110</td>
        </tr>
        <tr>
            <th>4x6</th>
            <td>5,000</td>
            <td>$160</td>
        </tr>
    </tbody>
</table>

<p style="font-size: 0.625em">
    We at Good Problems Entertainment are NOT responsible for any errors such as typos and/or incorrect file sizes submitted. Please make sure everything is correct before you submit your designs.
</p>

<form action="https://www.paypal.com/cgi-bin/webscr"; method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="HNXTW3SD46CHW">
    <table width="100%">
        <tr><td><input type="hidden" name="on0" value="Original Flyer Design">Original Flyer Design</td></tr><tr><td><select name="os0">
                    <option value="1 Sided Design">1 Sided Design $20.00 USD</option>
                    <option value="2 Sided Design">2 Sided Design $30.00 USD</option>
                </select> </td></tr>
    </table>
    <div style="text-align: center">
        <input type="hidden" name="currency_code" value="USD">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif"; border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"; width="1" height="1">
    </div>
</form>

<form action="https://www.paypal.com/cgi-bin/webscr"; method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="6BXJV9S939WGG">
    <table width="100%">
        <tr><td><input type="hidden" name="on0" value="Flyer Printing">Flyer Printing</td></tr><tr><td><select name="os0">
                    <option value="2,500 3x4 Flyers">2,500 3x4 Flyers $90.00 USD</option>
                    <option value="5,000 3x4 Flyers">5,000 3x4 Flyers $140.00 USD</option>
                    <option value="2,500 4x6 Flyers">2,500 4x6 Flyers $110.00 USD</option>
                    <option value="5,000 4x6 Flyers">5,000 4x6 Flyers $160.00 USD</option>
                    <option value="2,500 8.5x11 Flyers(B&W)">2,500 8.5x11 Flyers(B&W) $100.00 USD</option>
                    <option value="5,000 8.5x11 Flyers(B&W)">5,000 8.5x11 Flyers(B&W) $150.00 USD</option>
                </select> </td></tr>
    </table>
    <div style="text-align: center">
        <input type="hidden" name="currency_code" value="USD">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif"; border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"; width="1" height="1">
    </div>
</form>

<div class="grid">
    <?php
    foreach ($images as $image) {
        echo '<a href="' . $image . '" border="0"><img src="' . $image . '" /></a>';
    }
    ?>

</div>

<?php include('inc/footer.php'); ?>