<?php
$pageTitle = "Designs";
include('inc/header.php');

$images = array();
$images[] = "http://thegoodproblems.com/images/d1241x362.jpg";
$images[] = "http://thegoodproblems.com/images/d2.jpg";
$images[] = "http://thegoodproblems.com/images/d3.jpg";
$images[] = "http://thegoodproblems.com/images/d4.jpg";
$images[] = "http://thegoodproblems.com/images/d5.jpg";
$images[] = "http://thegoodproblems.com/images/d6.jpg";
$images[] = "http://thegoodproblems.com/images/d8.jpg";
$images[] = "http://thegoodproblems.com/images/d9.jpg";
$images[] = "http://thegoodproblems.com/images/d10.jpg";
$images[] = "http://thegoodproblems.com/images/d11.jpg";
$images[] = "http://thegoodproblems.com/images/d12.jpg";
$images[] = "http://thegoodproblems.com/images/d13.jpg";
$images[] = "http://thegoodproblems.com/images/d14.jpg";
$images[] = "http://thegoodproblems.com/images/d15.jpg";
$images[] = "http://thegoodproblems.com/images/d16.jpg";
$images[] = "http://thegoodproblems.com/images/d17.jpg";
$images[] = "http://thegoodproblems.com/images/d18.jpg";
$images[] = "http://thegoodproblems.com/images/d19.jpg";
$images[] = "http://thegoodproblems.com/images/d20.jpg";
$images[] = "http://thegoodproblems.com/images/d21.jpg";
?>

<h2>
    What can we offer you? 
</h2>

<ul>
    <li>COMPANY LOGOS</li>
    <li>SHIRT DESIGNS</li>
    <li>TATTOO DESIGNS</li>
    <li>FLYER/POSTER DESIGNS</li>
    <li>CD INSERTS</li>
    <li>ETC.</li>
</ul>

<table data-role="table" id="flyer-prices" data-mode="reflow" class="ui-responsive table-stroke">
    <thead>
        <tr>
            <th data-priority="1">Package</th>
            <th data-priority="2">Delivery Time</th>
            <th data-priority="3">Description</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1</th>
            <td>7 days</td>
            <td>T-shirt Design</td>
            <td>$30</td>
        </tr>
        <tr>
            <th>2</th>
            <td>7 days</td>
            <td>Mixtape/Album Cover</td>
            <td>$30</td>
        </tr>
        <tr>
            <th>3</th>
            <td>7 days</td>
            <td>1 logo sent as .jpg</td>
            <td>$30</td>
        </tr>
        <tr>
            <th>4</th>
            <td>3 days</td>
            <td>1 logo sent as .jpg</td>
            <td>$40</td>
        </tr>
        <tr>
            <th>5</th>
            <td>7 days</td>
            <td>1 logo sent as .jpg w/ editable .psd file</td>
            <td>$45</td>
        </tr>
        <tr>
            <th>6</th>
            <td>3 days</td>
            <td>1 logo sent as .jpg w/ edible .psd file</td>
            <td>$50</td>
        </tr>
        <tr>
            <th>7</th>
            <td>7 days</td>
            <td>1 logo, custom t-shirt design & CD/Mixtape Cover</td>
            <td>$70</td>
        </tr>
    </tbody>
</table>
<br />
<form action="https://www.paypal.com/cgi-bin/webscr"; method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="GS2JZZZ5KEQNJ">
    <table width="100%">
        <tr><td><input type="hidden" name="on0" value="GPE Designs(CL Special)">GPE Designs(CL Special)</td></tr><tr><td><select name="os0">
                    <option value="Package 1">Package 1 $30.00 USD</option>
                    <option value="Package 2">Package 2 $30.00 USD</option>
                    <option value="Package 3">Package 3 $30.00 USD</option>
                    <option value="Package 4">Package 4 $40.00 USD</option>
                    <option value="Package 5">Package 5 $45.00 USD</option>
                    <option value="Package 6">Package 6 $50.00 USD</option>
                    <option value="Package 7">Package 7 $70.00 USD</option>
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