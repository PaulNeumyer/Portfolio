<?php
$pageTitle = "My Makeup Diary";
include 'inc/header.php';
$images = array();
$counter = 1;
while ($counter < 40) {
    $images[] = "inc/img/" . $counter . ".jpg";
    $counter++;
}
?>


<div class="mycontent">
    <div id="gallery">
        <?php
        foreach ($images as $image) {
            echo '<a href="' . $image . '" data-ajax="false"><img src="' . $image . '" />';
        }
        ?>
    </div>
</div>

<?php include 'inc/footer.php'; ?>