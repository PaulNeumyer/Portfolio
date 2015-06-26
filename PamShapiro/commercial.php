<?php
$pageTitle = "Commercial Gallery";
include 'inc/header.php';

$images = array();
$counter = 1;
while($counter <= 13 ){
    $images[] = "gallery/commercial/Comm_0" . $counter . ".jpg";
    $counter++;
}
?>

<div class="container">

    <h2><?php echo $pageTitle ?></h2>

    <div class="row">
        <div class="col-md-12" style="text-align: center;">            

            <div id="thumbs" style="text-align: center">
                <?php foreach ($images as $image) {
                    
                     echo '<a href="' . $image . '"><img src="' . $image . '" style="width: 100%; margin: 0.5em auto; max-width:20em;" class="col-md-3"/></a>';

                }?>

            </div>

        </div> <!-- END COL --> 
    </div> <!-- END ROW --> 


    <?php include 'inc/footer.php'; ?>