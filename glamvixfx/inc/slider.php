<!-- SlidesJS Required: Start Slides -->
<!-- The container is used to define the width of the slideshow -->
<div class="container">
    <div id="slides">
        <?php 
        $counter = 1;
        while ($counter < 40){
            echo '<img src="inc/img/' . $counter . '.jpg" />';
            $counter++;
        } ?>
    </div>
</div>
<!-- End SlidesJS Required: Start Slides -->

<!-- SlidesJS Required: Link to jQuery -->
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<!-- End SlidesJS Required -->

<!-- SlidesJS Required: Link to jquery.slides.js -->
<script src="inc/js/jquery.slides.min.js"></script>
<!-- End SlidesJS Required -->

<!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
<script>
    $(function() {
        $('#slides').slidesjs({
            width: 940,
            height: 528,
            play: {
                active: true,
                auto: true,
                interval: 4000,
                swap: true
            }
        });
    });
</script>
<!-- End SlidesJS Required -->