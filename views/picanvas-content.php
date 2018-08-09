<?php
function picanvas_group_img($args){
    foreach ($args as $item) {
        echo '<div class="grid mask">
                    <figure>
                        <img class="img-responsive" src="assets/img/picanvas/' . $item[0] . '" alt="">
                        <figcaption>
                            <h5>' . $item[1] . '</h5>
                        </figcaption><!-- /figcaption -->
                    </figure><!-- /figure -->
                </div> <!-- end grid mask -->
                ';
    }
}
?>

<!-- ==== picanvas ==== -->
<div class="container" id="picanvas">
    <br>
    <div class="row">
        <br>
        <h1 class="centered">We Print Awesome Art</h1>
        <hr>
        <br>
        <br>
    </div><!-- /row -->
        <div class="row">
            <div class="col-md-4">
                <?php picanvas_group_img([
                    ['flower.jpg', 'Flower'],
                    ['tree.jpg', 'Tree'],
                    ['leopard.jpg', 'Leopard'],
                ]); ?>
            </div> <!-- end col-md-4 -->
            <div class="col-md-4">
                <?php picanvas_group_img([
                    ['wave.jpg', 'Waves'],
                    ['snowy-woods.jpg', 'Snowy Woods'],
                    ['new-york.jpg', 'New York'],
                ]); ?>
            </div> <!-- end col-md-4 -->
            <div class="col-md-4">
                <?php picanvas_group_img([
                    ['elephant.jpg', 'Elephant'],
                    ['leaves-and-stones.jpg', 'Leaves and Stones'],
                    ['horses.jpg', 'Horses'],
                ]); ?>
            </div> <!-- end col-md-4 -->
        </div><!-- /row -->
    </div><!-- /container -->

<!-- ==== SECTION DIVIDER4 ==== -->
<section class="section-divider textdivider divider4">
    <h2>Our dealers are our first priority. Always we take challenge to keep them happy.</h2>
</section><!-- section -->
